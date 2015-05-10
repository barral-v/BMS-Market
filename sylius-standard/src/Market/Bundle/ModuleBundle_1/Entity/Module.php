<?php

namespace Market\Bundle\ModuleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Product\Model\Product as BaseProduct;

/**
 * Module
 *
 * @ORM\Table("market_module")
 * @ORM\Entity
 */
class Module extends BaseProduct
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Module
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

