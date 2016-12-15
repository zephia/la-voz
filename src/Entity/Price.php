<?php
/*
 * This file is part of the La Voz Feed Generator package.
 *
 * (c) Zephia <info@zephia.com.ar>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zephia\LaVozFeed\Entity;

/**
 * Class Price
 *
 * @package Zephia\LaVozFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class Price extends Entity
{
    /**
     * @var string
     */
    private $currency = '$';

    /**
     * @var bool
     */
    private $hidden = false;

    /**
     * @var float
     */
    private $value = 0.0;

    /**
     * Get Currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set Currency
     *
     * @param string $currency
     *
     * @return Price
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Is Hidden
     *
     * @return boolean
     */
    public function isHidden()
    {
        return $this->hidden;
    }

    /**
     * Set Hidden
     *
     * @param boolean $hidden
     *
     * @return Price
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
        return $this;
    }

    /**
     * Get Value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set Value
     *
     * @param float $value
     *
     * @return Price
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
