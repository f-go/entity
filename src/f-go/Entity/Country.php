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
 * This class represents a country in a specific language.
 *
 * @copyright 2015 Frank Göldner
 * @author Frank Göldner <f-go@gmx.de>
 * @package FGo\Entity
 */
class Country
{
    /**
     * The country (e.g. Germany).
     *
     * @var string
     */
    protected $countryName = '';

    /**
     * The code of the country (e.g. DE, according to {@link http://en.wikipedia.org/wiki/ISO_3166 ISO 3166}).
     *
     * @var string
     */
    protected $countryCode = '';

    /**
     * Code of the language in which this country is represented
     * (according to {@link http://tools.ietf.org/html/rfc5646 RFC 5646}).
     *
     * Examples
     * --------
     * - "de-DE"
     * - "en-US"
     * - "en-GB"
     * - ...
     *
     * @var string
     */
    protected $languageCode = '';



    /**
     * Gets the {@see $countryName country name}.
     *
     * @return string Returns the country.
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets the {@see $countryName country name}.
     *
     * @param  string $countryName The country to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setCountryName($countryName)
    {
        $this->countryName = (string)$countryName;
        return $this;
    }

    /**
     * Gets the {@see $countryCode country code}
     *
     * @return string Returns the countryCode.
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets the {@see $countryCode country code}.
     *
     * @param  string $countryCode The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = (string)$countryCode;
        return $this;
    }

    /**
     * Gets the {@see $languageCode language code} in which this country is represented.
     *
     * @return string Returns the language code.
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets the {@see $languageCode language code} in which this country is represented.
     *
     * @param string $languageCode The language code to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = (string)$languageCode;
        return $this;
    }
}
