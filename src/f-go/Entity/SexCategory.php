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
 * This class contains all supported sex categories.
 *
 * Possible values:
 * ----------------
 * - male
 * - female
 *
 * @copyright 2015 Frank Göldner
 * @author Frank Göldner <f-go@gmx.de>
 * @package FGo\Entity
 */
abstract class SexCategory
{
    /**
     * Definition of sex category unknown.
     *
     * @var string
     */
    const UNKNOWN = 'unknown';

    /**
     * Definition of sex category male.
     *
     * @var string
     */
    const MALE = 'male';

    /**
     * Definition of sex category female.
     *
     * @var string
     */
    const FEMALE = 'female';



    /**
     * List of all supported sex categories.
     *
     * @var array
     */
    static protected $supportedCategories = array(
        self::MALE,
        self::FEMALE
    );

    /**
     * Get a list of all supported sex categories.
     *
     * @return string[]
     */
    static public function getSupportedCategories()
    {
        return self::$supportedCategories;
    }

    /**
     * Check if the given category is one of the supported.
     *
     * @param  string $category The category to check.
     * @return bool Returns *TRUE* if the category is supported or *FALSE* if not.
     */
    static public function isSupportedCategory($category)
    {
        $category = strtolower(trim($category));
        foreach (self::$supportedCategories as $supportedCategory) {
            if ($category === $supportedCategory) {
                return true;
            }
        }

        return false;
    }
}
