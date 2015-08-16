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
class Address extends Locality
{
    /**
     * First address line.
     *
     * @var string
     */
    protected $addressLine1 = '';

    /**
     * Second address line.
     *
     * @var string
     */
    protected $addressLine2 = '';

    /**
     * Third address line.
     *
     * @var string
     */
    protected $addressLine3 = '';

    /**
     * The coordinate.
     *
     * @var null|Coordinate
     */
    protected $coordinate = null;

    /**
     * Code of the language in which this locality is represented
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
     * Gets the {@see $addressLine1 first address line}.
     *
     * @return string Returns the addressLine1.
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Sets the {@see $addressLine1 first address line}.
     *
     * @param string $address The value to set.
     */
    public function setAddressLine1($address)
    {
        $this->addressLine1 = (string)$address;
    }

    /**
     * Gets the {@see $addressLine2 second address line}.
     *
     * @return string Returns the address line.
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Sets the {@see $addressLine2 second address line}.
     *
     * @param string $address The value to set.
     */
    public function setAddressLine2($address)
    {
        $this->addressLine2 = (string)$address;
    }

    /**
     * Gets the {@see $addressLine3 third address line}.
     *
     * @return string Returns the address line.
     */
    public function getAddressLine3()
    {
        return $this->addressLine3;
    }

    /**
     * Sets the {@see $addressLine3 third address line}.
     *
     * @param string $address The value to set.
     */
    public function setAddressLine3($address)
    {
        $this->addressLine3 = (string)$address;
    }

    /**
     * Gets the {@see $coordinate coordinate}.
     *
     * @return Coordinate|null Returns the coordinate.
     */
    public function getCoordinate()
    {
        return $this->coordinate;
    }

    /**
     * Sets the {@see $coordinate coordinate}.
     *
     * @param Coordinate|null $coordinate The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setCoordinate(Coordinate $coordinate)
    {
        $this->coordinate = $coordinate;
        return $this;
    }

    /**
     * Checks whether a {@see $coordinate coordinate} is set.
     *
     * @return bool Returns *TRUE* if a coordinate is set or *FALSE* if not.
     */
    public function hasCoordinate()
    {
        return $this->coordinate !== null;
    }

    /**
     * Unsets the assigned {@see $coordinate coordinate}.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function unsetCoordinate()
    {
        $this->coordinate = null;
        return $this;
    }

    /**
     * Gets the {@see $languageCode language code} in which this address is represented.
     *
     * @return string Returns the language code.
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets the {@see $languageCode language code} in which this address is represented.
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
