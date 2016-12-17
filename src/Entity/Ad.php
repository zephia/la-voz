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
 * Class Ad
 *
 * @package Zephia\LaVozFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class Ad extends Entity
{
    /**
     * @var string
     */
    private $id = '';

    /**
     * @var string
     */
    private $city = '';

    /**
     * @var string
     */
    private $content = '';

    /**
     * @var District
     */
    private $district;

    /**
     * @var Email
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $modify;

    /**
     * @var string
     */
    private $operation = '';

    /**
     * @var string
     */
    private $payment = '';

    /**
     * @var Phone
     */
    private $phone;

    /**
     * @var array
     */
    private $pictures = [];

    /**
     * @var Price
     */
    private $price;

    /**
     * @var string
     */
    private $region = '';

    /**
     * @var string
     */
    private $status = '';

    /**
     * @var string
     */
    private $title = '';

    /**
     * @var string
     */
    private $type = '';

    /**
     * Get Id
     *
     * @return string
     */
    public function getId()
    {
        if (empty($this->id)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'id')
            );
        }
        return $this->id;
    }

    /**
     * Set Id
     *
     * @param string $id
     *
     * @return Ad
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get City
     *
     * @return string
     */
    public function getCity()
    {
        if (empty($this->city)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'city')
            );
        }
        return $this->city;
    }

    /**
     * Set City
     *
     * @param string $city
     *
     * @return Ad
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Get Content
     *
     * @return string
     */
    public function getContent()
    {
        if (empty($this->content)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'content')
            );
        }
        return $this->content;
    }

    /**
     * Set Content
     *
     * @param string $content
     *
     * @return Ad
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail()
    {
        if (empty($this->email)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'email')
            );
        }
        return $this->email;
    }

    /**
     * Set Email
     *
     * @param Email $email
     *
     * @return Ad
     */
    public function setEmail(Email $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get District
     *
     * @return District
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set District
     *
     * @param District $district
     *
     * @return Ad
     */
    public function setDistrict(District $district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * Get Modify
     *
     * @return \DateTime
     */
    public function getModify()
    {
        if (empty($this->modify)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'modify')
            );
        }
        return $this->modify;
    }

    /**
     * Set Modify
     *
     * @param \DateTime $modify
     *
     * @return Ad
     */
    public function setModify($modify)
    {
        $this->modify = $modify;
        return $this;
    }

    /**
     * Get Operation
     *
     * @return string
     */
    public function getOperation()
    {
        if (empty($this->operation)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'operation')
            );
        }
        return $this->operation;
    }

    /**
     * Set Operation
     *
     * @param string $operation
     *
     * @return Ad
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Set Payment
     *
     * @param string $payment
     *
     * @return Ad
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Get Payment
     *
     * @return string
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Get Phone
     *
     * @return Phone
     */
    public function getPhone()
    {
        if (empty($this->phone)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'phone')
            );
        }
        return $this->phone;
    }

    /**
     * Set Phone
     *
     * @param Phone $phone
     *
     * @return Ad
     */
    public function setPhone(Phone $phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Add Picture
     *
     * @param Picture $picture
     *
     * @return Ad
     */
    public function addPicture(Picture $picture)
    {
        $this->pictures[] = $picture;
        return $this;
    }

    /**
     * Get Pictures
     *
     * @return array
     */
    public function getPictures()
    {
        if (count($this->pictures) === 0) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'pictures')
            );
        }
        return $this->pictures;
    }

    /**
     * Set Pictures
     *
     * @param array $pictures
     *
     * @return Ad
     */
    public function setPictures($pictures)
    {
        $this->pictures = $pictures;
        return $this;
    }

    /**
     * Get Price
     *
     * @return Price
     */
    public function getPrice()
    {
        if (empty($this->price)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'price')
            );
        }
        return $this->price;
    }

    /**
     * Set Price
     *
     * @param Price $price
     *
     * @return Ad
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get Region
     *
     * @return string
     */
    public function getRegion()
    {
        if (empty($this->region)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'region')
            );
        }
        return $this->region;
    }

    /**
     * Set Region
     *
     * @param string $region
     *
     * @return Ad
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Get Status
     *
     * @return string
     */
    public function getStatus()
    {
        if (empty($this->status)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'status')
            );
        }
        return $this->status;
    }

    /**
     * Set Status
     *
     * @param string $status
     *
     * @return Ad
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get Title
     *
     * @return string
     */
    public function getTitle()
    {
        if (empty($this->title)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'title')
            );
        }
        return $this->title;
    }

    /**
     * Set Title
     *
     * @param string $title
     *
     * @return Ad
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get Type
     *
     * @return string
     */
    public function getType()
    {
        if (empty($this->type)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'type')
            );
        }
        return $this->type;
    }

    /**
     * Set Type
     *
     * @param string $type
     *
     * @return Ad
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
