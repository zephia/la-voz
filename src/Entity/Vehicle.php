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
 * Class Vehicle
 *
 * @package Zephia\LaVozFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class Vehicle extends Ad
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var string
     */
    protected $confort;

    /**
     * @var int
     */
    protected $doors;

    /**
     * @var string
     */
    protected $fuel;

    /**
     * @var int
     */
    protected $kilometers;

    /**
     * @var string
     */
    protected $model = '';

    /**
     * @var string
     */
    protected $receives_lesser_value;

    /**
     * @var string
     */
    protected $security;

    /**
     * @var string
     */
    protected $segment;

    /**
     * @var string
     */
    protected $transmission;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var integer
     */
    protected $year = 0;

    /**
     * Get Color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set Color
     *
     * @param string $color
     *
     * @return Vehicle
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Get Confort
     *
     * @return string
     */
    public function getConfort()
    {
        return $this->confort;
    }

    /**
     * Set Confort
     *
     * @param string $confort
     *
     * @return Vehicle
     */
    public function setConfort($confort)
    {
        $this->confort = $confort;
        return $this;
    }

    /**
     * Get Doors
     *
     * @return int
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * Set Doors
     *
     * @param int $doors
     *
     * @return Vehicle
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;
        return $this;
    }

    /**
     * Get Fuel
     *
     * @return string
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Set Fuel
     *
     * @param string $fuel
     *
     * @return Vehicle
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
        return $this;
    }

    /**
     * Get Kilometers
     *
     * @return int
     */
    public function getKilometers()
    {
        return $this->kilometers;
    }

    /**
     * Set Kilometers
     *
     * @param int $kilometers
     *
     * @return Vehicle
     */
    public function setKilometers($kilometers)
    {
        $this->kilometers = $kilometers;
        return $this;
    }

    /**
     * Get Model
     *
     * @return string
     */
    public function getModel()
    {
        if (empty($this->model)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'model')
            );
        }
        return $this->model;
    }

    /**
     * Set Model
     *
     * @param string $model
     *
     * @return Vehicle
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * Get Receives Lesser Value
     *
     * @return string
     */
    public function getReceivesLesserValue()
    {
        return $this->receives_lesser_value;
    }

    /**
     * Set Receives Lesser Value
     *
     * @param string $receives_lesser_value
     *
     * @return Vehicle
     */
    public function setReceivesLesserValue($receives_lesser_value)
    {
        $this->receives_lesser_value = $receives_lesser_value;
        return $this;
    }

    /**
     * Get Security
     *
     * @return string
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set Security
     *
     * @param string $security
     *
     * @return Vehicle
     */
    public function setSecurity($security)
    {
        $this->security = $security;
        return $this;
    }

    /**
     * Get Segment
     *
     * @return string
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Set Segment
     *
     * @param string $segment
     *
     * @return Vehicle
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;
        return $this;
    }

    /**
     * Get Transmission
     *
     * @return string
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * Set Transmission
     *
     * @param string $transmission
     *
     * @return Vehicle
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
        return $this;
    }

    /**
     * Get Version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set Version
     *
     * @param string $version
     *
     * @return Vehicle
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Get Year
     *
     * @return integer
     */
    public function getYear()
    {
        if (empty($this->year)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'year')
            );
        }
        return $this->year;
    }

    /**
     * Set Year
     *
     * @param integer $year
     *
     * @return Vehicle
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }
}
