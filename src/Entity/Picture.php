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
 * Class Picture
 *
 * @package Zephia\LaVozFeed\Entity
 * @author  Mauro Moreno <moreno.mauro.emanuel@gmail.com>
 */
class Picture extends Entity
{
    /**
     * @var string
     */
    private $picture = '';

    /**
     * Get Picture
     *
     * @return string
     */
    public function getPicture()
    {
        if (empty($this->picture)) {
            throw new LogicException(
                sprintf(self::ERROR_MISSING_ATTRIBUTE_FORMAT, 'picture')
            );
        }
        return $this->picture;
    }

    /**
     * Set Picture
     *
     * @param string $picture
     *
     * @return Picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
        return $this;
    }
}
