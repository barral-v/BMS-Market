<?php
namespace Payum\OmnipayBridge\Action;

use Payum\Core\Bridge\Spl\ArrayObject;
use Payum\Core\Exception\LogicException;
use Payum\Core\Exception\RequestNotSupportedException;
use Payum\Core\PaymentAwareInterface;
use Payum\Core\PaymentInterface;
use Payum\Core\Reply\HttpPostRedirect;
use Payum\Core\Reply\HttpRedirect;
use Payum\Core\Request\Capture;
use Payum\Core\Request\GetHttpRequest;
use Payum\Core\Request\ObtainCreditCard;
use Payum\Core\Security\SensitiveValue;

class CaptureAction extends BaseApiAwareAction implements PaymentAwareInterface
{
    /**
     * @var PaymentInterface
     */
    protected $payment;

    /**
     * {@inheritDoc}
     */
    public function setPayment(PaymentInterface $payment)
    {
        $this->payment = $payment;
    }

    /**
     * {@inheritDoc}
     *
     * @param Capture $request
     */
    public function execute($request)
    {
        if (!$this->supports($request)) {
            throw RequestNotSupportedException::createActionNotSupported($this, $request);
        }

        $details = ArrayObject::ensureArrayObject($request->getModel());

        if ($details['_status']) {
            return;
        }

        if (false == $details['clientIp']) {
            $this->payment->execute($httpRequest = new GetHttpRequest);

            $details['clientIp'] = $httpRequest->clientIp;
        }

        if (isset($details['_completeCaptureRequired'])) {
            $response = $this->gateway->completePurchase($details->toUnsafeArray())->send();

            unset($details['_completeCaptureRequired']);
        } else {
            if (false == $details->validateNotEmpty(array('card'), false) && false == $details->validateNotEmpty(array('cardReference'), false)) {
                try {
                    $this->payment->execute($creditCardRequest = new ObtainCreditCard);
                    $card = $creditCardRequest->obtain();

                    $details['card'] = new SensitiveValue(array(
                        'number' => $card->getNumber(),
                        'cvv' => $card->getSecurityCode(),
                        'expiryMonth' => $card->getExpireAt()->format('m'),
                        'expiryYear' => $card->getExpireAt()->format('y'),
                        'firstName' => $card->getHolder(),
                        'lastName' => '',
                    ));
                } catch (RequestNotSupportedException $e) {
                    throw new LogicException('Credit card details has to be set explicitly or there has to be an action that supports ObtainCreditCard request.');
                }
            }

            $response = $this->gateway->purchase($details->toUnsafeArray())->send();
        }

        if ($response->isRedirect()) {
            $details['_completeCaptureRequired'] = 1;

            if ($response->getRedirectMethod() == 'POST') {
                throw new HttpPostRedirect($response->getRedirectUrl(), $response->getRedirectData());
            }
            else {
                throw new HttpRedirect($response->getRedirectUrl());
            }
        }

        $details['_reference']      = $response->getTransactionReference();
        $details['_status']         = $response->isSuccessful() ? 'captured' : 'failed';
        $details['_status_code']    = $response->getCode();
        $details['_status_message'] = $response->isSuccessful() ? '' : $response->getMessage();
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
