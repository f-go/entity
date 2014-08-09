<?php
/**
 * Created by PhpStorm.
 * User: tito
 * Date: 07.08.14
 * Time: 00:04
 */
namespace FGo\Entity;


class SexCategory
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
     * List of all known sex categories.
     *
     * @var array
     */
    static protected $knownCategories = array(
        self::MALE,
        self::FEMALE
    );

    /**
     * Get a list of all known sex categories.
     *
     * @return array
     */
    static public function getKnownCategories()
    {
        return self::$knownCategories;
    }

    /**
     * Check if the given category is one of the known.
     *
     * @param  string $category The category to check.
     * @return bool Returns <em>TRUE</em> if the category is known or <em>FALSE</em> if not.
     */
    static public function isKnownCategory($category)
    {
        foreach (self::$knownCategories as $knownCategory) {
            if ($category === $knownCategory) {
                return true;
            }
        }

        return false;
    }
} 