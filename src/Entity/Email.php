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
 * Class Email
 *
 * @package Zephia\LaVozFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class Email extends ContactMethod
{
    /**
     * @var string
     */
    const ATTRIBUTE = 'email';

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail()
    {
        return parent::getValue();
    }

    /**
     * Set Email
     *
     * @param string $email
     *
     * @return ContactMethod
     */
    public function setEmail($email)
    {
        return parent::setValue($email);
    }
}
