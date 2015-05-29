# Custom gateway.

In this chapter we are going to show how you can create a payment with custom [Omnipay](https://github.com/omnipay/omnipay) gateway. It may be community created gateway or you own.
We assume you already read [get it started](https://github.com/Payum/Payum/blob/master/src/Payum/Core/Resources/docs/get-it-started.md) from core.
Here we just show you modifications you have to put to the files shown there.

## config.php

```php
<?php
//config.php

$stripeGateway = new \Omnipay\Stripe\Gateway();
$stripeGateway->setApiKey('REPLACE IT');
$stripeGateway->setTestMode(true);

$directOmnipayFactory = new Payum\OmnipayBridge\DirectPaymentFactory();
$payments['stripe_omnipay'] = $directOmnipayFactory->create(array(
    'payum.api.gateway' => $stripeGateway, 
));
```

## Next

* [Core's Get it started](https://github.com/Payum/Core/blob/master/Resources/docs/get-it-started.md).
* [The architecture](https://github.com/Payum/Core/blob/master/Resources/docs/the-architecture.md).
* [Supported payments](https://github.com/Payum/Core/blob/master/Resources/docs/supported-payments.md).
* [Storages](https://github.com/Payum/Core/blob/master/Resources/docs/storages.md).
* [Capture script](https://github.com/Payum/Core/blob/master/Resources/docs/capture-script.md).
* [Authorize script](https://github.com/Payum/Core/blob/master/Resources/docs/authorize-script.md).
* [Done script](https://github.com/Payum/Core/blob/master/Resources/docs/done-script.md).

Back to [index](index.md).