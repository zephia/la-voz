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
 * Class Phone
 *
 * @package Zephia\LaVozFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class Phone extends ContactMethod
{
    /**
     * @var string
     */
    const ATTRIBUTE = 'phone';

    /**
     * Get Phone
     *
     * @return string
     */
    public function getPhone()
    {
        return parent::getValue();
    }

    /**
     * Set Phone
     *
     * @param string $phone
     *
     * @return ContactMethod
     */
    public function setPhone($phone)
    {
        return parent::setValue($phone);
    }
}
