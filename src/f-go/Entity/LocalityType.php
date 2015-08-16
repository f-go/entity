<?php
/*
 * This file is part of the entities project.
 *
 * Copyright (c) 2015 Frank Göldner <f-go@gmx.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FGo\Entity;


/**
 * This class …
 *
 * @copyright 2015 Frank Göldner
 * @author Frank Göldner <f-go@gmx.de>
 * @package FGo\Entity
 */
class LocalityType
{
    const UNDEFINED = '';
    const MUNICIPALITY = 'municipality';
    const VILLAGE = 'village';
    const TOWN = 'town';
    const CITY = 'city';
    const METROPOLIS = 'metropolis';



    /**
     * List of all supported locality types.
     *
     * @var array
     */
    static protected $supportedTypes = array(
        self::MUNICIPALITY,
        self::VILLAGE,
        self::TOWN,
        self::CITY,
        self::METROPOLIS
    );

    /**
     * Gets a list of all supported locality types.
     *
     * @return string[]
     */
    static public function getSupportedTypes()
    {
        return self::$supportedTypes;
    }

    /**
     * Checks if the given type is supported.
     *
     * @param  string $type The type to check.
     * @return bool Returns *TRUE* if the type is supported or *FALSE* if not.
     */
    static public function isSupportedType($type)
    {
        $type = strtolower(trim($type));
        foreach (self::$supportedTypes as $supportedType) {
            if ($type === $supportedType) {
                return true;
            }
        }

        return false;
    }
}
