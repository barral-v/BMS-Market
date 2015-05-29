<?php
namespace Payum\Core\Model;

/**
 * @deprecated
 */
interface PaymentConfigInterface
{
    /**
     * @return string
     */
    public function getPaymentName();

    /**
     * @param string $paymentName
     */
    public function setPaymentName($paymentName);

    /**
     * @return string
     */
    public function getFactoryName();

    /**
     * @param string $name
     */
    public function setFactoryName($name);

    /**
     * @param array $config
     */
    public function setConfig(array $config);

    /**
     * @return array
     */
    public function getConfig();
}