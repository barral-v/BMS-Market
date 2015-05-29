<?php
namespace Payum\Core;

/**
 * @deprecated use GatewayFactoryInterface
 */
interface PaymentFactoryInterface
{
    /**
     * @param array $config
     *
     * @return array
     */
    public function createConfig(array $config = array());

    /**
     * @param array $config
     *
     * @return PaymentInterface
     */
    public function create(array $config = array());
}
