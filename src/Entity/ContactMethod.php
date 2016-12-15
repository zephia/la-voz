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
 * Class ContactMethod
 *
 * @package Zephia\LaVozFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
abstract class ContactMethod extends Entity
{
    /**
     * @var bool
     */
    private $hidden = false;

    /**
     * @var string
     */
    private $value = '';

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
     * @return ContactMethod
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
        return $this;
    }

    /**
     * Get Value
     *
     * @return string
     */
    public function getValue()
    {
        if (empty($this->value)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, get_class($this)::ATTRIBUTE)
            );
        }
        return $this->value;
    }

    /**
     * Set Value
     *
     * @param string $value
     *
     * @return ContactMethod
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
