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

use Zephia\LaVozFeed\Exception\LogicException;

/**
 * Class District
 *
 * @package Zephia\LaVozFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class District extends Entity
{
    /**
     * @var string
     */
    private $district;

    /**
     * @var string
     */
    private $zone;

    /**
     * Get District
     *
     * @return string
     */
    public function getDistrict()
    {
        if (empty($this->district)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'district')
            );
        }
        return $this->district;
    }

    /**
     * Get District
     *
     * @param string $district
     *
     * @return District
     */
    public function setDistrict($district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * Get Zone
     *
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Get Zone
     *
     * @param string $zone
     *
     * @return District
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
        return $this;
    }
}
