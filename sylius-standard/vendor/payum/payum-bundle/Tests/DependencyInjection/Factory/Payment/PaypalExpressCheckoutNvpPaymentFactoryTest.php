<?php
namespace Payum\Bundle\PayumBundle\Tests\DependencyInjection\Factory\Payment;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

use Payum\Bundle\PayumBundle\DependencyInjection\Factory\Payment\PaypalExpressCheckoutNvpPaymentFactory;

class PaypalExpressCheckoutNvpPaymentFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldBeSubClassOfAbstractPaymentFactory()
    {
        $rc = new \ReflectionClass('Payum\Bundle\PayumBundle\DependencyInjection\Factory\Payment\PaypalExpressCheckoutNvpPaymentFactory');

        $this->assertTrue($rc->isSubclassOf('Payum\Bundle\PayumBundle\DependencyInjection\Factory\Payment\AbstractPaymentFactory'));
    }

    /**
     * @test
     */
    public function couldBeConstructedWithoutAnyArguments()
    {
        new PaypalExpressCheckoutNvpPaymentFactory;
    }

    /**
     * @test
     */
    public function shouldAllowGetName()
    {
        $factory = new PaypalExpressCheckoutNvpPaymentFactory;

        $this->assertEquals('paypal_express_checkout_nvp', $factory->getName());
    }

    /**
     * @test
     */
    public function shouldAllowAddConfiguration()
    {
        $factory = new PaypalExpressCheckoutNvpPaymentFactory;

        $tb = new TreeBuilder();
        $rootNode = $tb->root('foo');
        
        $factory->addConfiguration($rootNode);

        $processor = new Processor();
        $config = $processor->process($tb->buildTree(), array(array(
            'username' => 'aUsername',
            'password' => 'aPassword',
            'signature' => 'aSignature',
        )));
        

        $this->assertArrayHasKey('username', $config);
        $this->assertEquals('aUsername', $config['username']);

        $this->assertArrayHasKey('password', $config);
        $this->assertEquals('aPassword', $config['password']);

        $this->assertArrayHasKey('signature', $config);
        $this->assertEquals('aSignature', $config['signature']);

        //come from abstract payment factory
        $this->assertArrayHasKey('actions', $config);
        $this->assertArrayHasKey('apis', $config);
        $this->assertArrayHasKey('extensions', $config);
    }

    /**
     * @test
     *
     * @expectedException \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException
     * @expectedExceptionMessage The child node "username" at path "foo" must be configured.
     */
    public function thrownIfUsernameOptionNotSet()
    {
        $factory = new PaypalExpressCheckoutNvpPaymentFactory;

        $tb = new TreeBuilder();
        $rootNode = $tb->root('foo');

        $factory->addConfiguration($rootNode);

        $processor = new Processor();
        $processor->process($tb->buildTree(), array(array()));
    }

    /**
     * @test
     *
     * @expectedException \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException
     * @expectedExceptionMessage The child node "password" at path "foo" must be configured.
     */
    public function thrownIfPasswordOptionNotSet()
    {
        $factory = new PaypalExpressCheckoutNvpPaymentFactory;

        $tb = new TreeBuilder();
        $rootNode = $tb->root('foo');

        $factory->addConfiguration($rootNode);

        $processor = new Processor();
        $processor->process($tb->buildTree(), array(array(
            'username' => 'aUsername'
        )));
    }

    /**
     * @test
     *
     * @expectedException \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException
     * @expectedExceptionMessage The child node "signature" at path "foo" must be configured.
     */
    public function thrownIfSignatureOptionNotSet()
    {
        $factory = new PaypalExpressCheckoutNvpPaymentFactory;

        $tb = new TreeBuilder();
        $rootNode = $tb->root('foo');

        $factory->addConfiguration($rootNode);

        $processor = new Processor();
        $processor->process($tb->buildTree(), array(array(
            'username' => 'aUsername',
            'password' => 'aPassword',
        )));
    }

    /**
     * @test
     */
    public function shouldAllowCreatePaymentAndReturnItsId()
    {
        $factory = new PaypalExpressCheckoutNvpPaymentFactory;

        $container = new ContainerBuilder;

        $paymentId = $factory->create($container, 'aPaymentName', array(
            'username' => 'aUsername',
            'password' => 'aPassword',
            'signature' => 'aSignature',
            'sandbox' => true,
            'actions' => array(),
            'apis' => array(),
            'extensions' => array(),
        ));
        
        $this->assertEquals('payum.paypal_express_checkout_nvp.aPaymentName.payment', $paymentId);
        $this->assertTrue($container->hasDefinition($paymentId));

        $payment = $container->getDefinition($paymentId);

        //guard
        $this->assertNotEmpty($payment->getFactoryMethod());
        $this->assertNotEmpty($payment->getFactoryService());
        $this->assertNotEmpty($payment->getArguments());

        $config = $payment->getArgument(0);

        $this->assertEquals('aPaymentName', $config['payum.payment_name']);
    }

    /**
     * @test
     */
    public function shouldLoadFactory()
    {
        $factory = new PaypalExpressCheckoutNvpPaymentFactory;

        $container = new ContainerBuilder;

        $factory->load($container);

        $this->assertTrue($container->hasDefinition('payum.paypal_express_checkout_nvp.factory'));

        $factoryService = $container->getDefinition('payum.paypal_express_checkout_nvp.factory');
        $this->assertEquals('Payum\Paypal\ExpressCheckout\Nvp\PaymentFactory', $factoryService->getClass());
        $this->assertEquals(
            array(array('name' => 'paypal_express_checkout_nvp', 'human_name' => 'Paypal Express Checkout Nvp')),
            $factoryService->getTag('payum.payment_factory')
        );

        $factoryConfig = $factoryService->getArgument(0);
        $this->assertEquals('paypal_express_checkout_nvp', $factoryConfig['payum.factory_name']);
        $this->assertArrayHasKey('buzz.client', $factoryConfig);
        $this->assertArrayHasKey('twig.env', $factoryConfig);
        $this->assertArrayHasKey('payum.template.layout', $factoryConfig);
        $this->assertArrayHasKey('payum.template.obtain_credit_card', $factoryConfig);

        $this->assertInstanceOf('Symfony\Component\DependencyInjection\Reference', $factoryService->getArgument(1));
        $this->assertEquals('payum.payment_factory', (string) $factoryService->getArgument(1));
    }

    /**
     * @test
     */
    public function shouldCallParentsCreateMethod()
    {
        $factory = new PaypalExpressCheckoutNvpPaymentFactory;

        $container = new ContainerBuilder;

        $paymentId = $factory->create($container, 'aPaymentName', array(
            'username' => 'aUsername',
            'password' => 'aPassword',
            'signature' => 'aSignature',
            'sandbox' => true,
            'actions' => array('payum.action.foo'),
            'apis' => array('payum.api.bar'),
            'extensions' => array('payum.extension.ololo'),
        ));

        $this->assertDefinitionContainsMethodCall(
            $container->getDefinition($paymentId), 
            'addAction', 
            new Reference('payum.action.foo')
        );
        $this->assertDefinitionContainsMethodCall(
            $container->getDefinition($paymentId),
            'addApi',
            new Reference('payum.api.bar')
        );
        $this->assertDefinitionContainsMethodCall(
            $container->getDefinition($paymentId),
            'addExtension',
            new Reference('payum.extension.ololo')
        );
    }

    protected function assertDefinitionContainsMethodCall(Definition $serviceDefinition, $expectedMethod, $expectedFirstArgument)
    {
        foreach ($serviceDefinition->getMethodCalls() as $methodCall) {
            if ($expectedMethod == $methodCall[0] && $expectedFirstArgument == $methodCall[1][0]) {
                return;
            }
        }

        $this->fail(sprintf(
            'Failed assert that service (Class: %s) has method %s been called with first argument %s',
            $serviceDefinition->getClass(),
            $expectedMethod,
            $expectedFirstArgument
        ));
    }
}