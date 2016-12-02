<?php
/*
 * This file is part of the OLX Feed Generator package.
 *
 * (c) Zephia <info@zephia.com.ar>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zephia\LaVozFeed\Entity;

/**
 * Class AdBag
 *
 * @package Zephia\LaVozFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class AdBag
{
    /**
     * @var array
     */
    private $ads = [];

    /**
     * Get Ads
     *
     * @return array
     */
    public function getAds()
    {
        return $this->ads;
    }

    /**
     * Set Ads
     *
     * @param array $ads
     *
     * @return $this
     */
    public function setAds(array $ads)
    {
        $this->ads = $ads;
        return $this;
    }

    /**
     * Add an ad
     *
     * @param Ad $ad
     *
     * @return $this
     */
    public function addAd(Ad $ad)
    {
        $this->ads[] = $ad;
        return $this;
    }
}