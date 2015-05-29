<?php
namespace Payum\Paypal\ExpressCheckout\Nvp\Action;

use Payum\Core\Bridge\Spl\ArrayObject;
use Payum\Core\Request\Capture;
use Payum\Core\Request\Sync;
use Payum\Core\Action\PaymentAwareAction;
use Payum\Core\Exception\RequestNotSupportedException;
use Payum\Core\Security\GenericTokenFactoryAwareInterface;
use Payum\Core\Security\GenericTokenFactoryInterface;
use Payum\Paypal\ExpressCheckout\Nvp\Request\Api\SetExpressCheckout;
use Payum\Paypal\ExpressCheckout\Nvp\Request\Api\AuthorizeToken;
use Payum\Paypal\ExpressCheckout\Nvp\Request\Api\DoExpressCheckoutPayment;
use Payum\Paypal\ExpressCheckout\Nvp\Api;

class CaptureAction extends PaymentAwareAction implements GenericTokenFactoryAwareInterface
{
    /**
     * @var GenericTokenFactoryInterface
     */
    protected $tokenFactory;

    /**
     * @param GenericTokenFactoryInterface $genericTokenFactory
     *
     * @return void
     */
    public function setGenericTokenFactory(GenericTokenFactoryInterface $genericTokenFactory = null)
    {
        $this->tokenFactory = $genericTokenFactory;
    }

    /**
     * {@inheritDoc}
     */
    public function execute($request)
    {
        /** @var $request Capture */
        RequestNotSupportedException::assertSupports($this, $request);

        $details = ArrayObject::ensureArrayObject($request->getModel());
        $details->defaults(array(
            'PAYMENTREQUEST_0_PAYMENTACTION' => Api::PAYMENTACTION_SALE,
        ));

        if (false == $details['TOKEN']) {
            if (false == $details['RETURNURL'] && $request->getToken()) {
                $details['RETURNURL'] = $request->getToken()->getTargetUrl();
            }

            if (false == $details['CANCELURL'] && $request->getToken()) {
                $details['CANCELURL'] = $request->getToken()->getTargetUrl();
            }

            if (empty($details['PAYMENTREQUEST_0_NOTIFYURL']) && $request->getToken() && $this->tokenFactory) {
                $notifyToken = $this->tokenFactory->createNotifyToken(
                    $request->getToken()->getPaymentName(),
                    $request->getToken()->getDetails()
                );

                $details['PAYMENTREQUEST_0_NOTIFYURL'] = $notifyToken->getTargetUrl();
            }

            $this->payment->execute(new SetExpressCheckout($details));

            if ($details['L_ERRORCODE0']) {
                return;
            }

            $this->payment->execute(new AuthorizeToken($details));
        }

        $this->payment->execute(new Sync($details));

        if (
            $details['PAYERID'] &&
            Api::CHECKOUTSTATUS_PAYMENT_ACTION_NOT_INITIATED == $details['CHECKOUTSTATUS'] &&
            $details['PAYMENTREQUEST_0_AMT'] > 0
        ) {
            $this->payment->execute(new DoExpressCheckoutPayment($details));
        }

        $this->payment->execute(new Sync($details));
    }

    /**
     * {@inheritDoc}
     */
    public function supports($request)
    {
        return
            $request instanceof Capture &&
            $request->getModel() instanceof \ArrayAccess
        ;
    }
}
