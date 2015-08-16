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
 * This class represents a locality (e.g. Leipzig) in a specific language.
 *
 * This could be a municipality, village, town, city or metropolis.
 *
 * @copyright 2015 Frank Göldner
 * @author Frank Göldner <f-go@gmx.de>
 * @package FGo\Entity
 */
class Locality extends Country
{
    /**
     * The name of the locality (e.g. Leipzig, Berlin).
     *
     * @var string
     */
    protected $localityName = '';

    /**
     * The type of this locality (see {@see LocalityType}).
     *
     * @var string
     */
    protected $localityType = LocalityType::UNDEFINED;

    /**
     * The administration unit (e.g. Saxony Anhalt).
     *
     * Definition
     * ----------
     * This could be a state, province or canton.
     *
     * @var string
     */
    protected $administrationUnit = '';

    /**
     * The administration unit code (e.g. SN).
     *
     * @var string
     */
    protected $administrationUnitCode = '';

    /**
     * The county (e.g. Burgenlandkreis).
     *
     * Definition
     * ----------
     * A political and administrative division of a state, providing certain local governmental services.
     *
     * @var string
     */
    protected $county = '';

    /**
     * The postcode.
     *
     * @var string
     */
    protected $postcode = '';

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
     * Gets the {@see $localityName locality name}.
     *
     * @return string Returns the name.
     */
    public function getLocalityName()
    {
        return $this->localityName;
    }

    /**
     * Sets the {@see $localityName locality name}.
     *
     * @param string $localityName The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setLocalityName($localityName)
    {
        $this->localityName = (string)$localityName;
        return $this;
    }

    /**
     * Gets the {@see $localityType locality type}.
     *
     * @return string Returns the type.
     */
    public function getLocalityType()
    {
        return $this->localityType;
    }

    /**
     * Sets the {@see $localityType locality type}.
     *
     * @param string $localityType The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setLocalityType($localityType)
    {
        $this->localityType = (string)$localityType;
        return $this;
    }

    /**
     * Gets the corresponding {@see $administrationUnit administration unit}.
     *
     * @return string Returns the administration unit.
     */
    public function getAdministrationUnit()
    {
        return $this->administrationUnit;
    }

    /**
     * Sets the corresponding {@see $administrationUnit administration unit}.
     *
     * @param string $administrationUnit The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setAdministrationUnit($administrationUnit)
    {
        $this->administrationUnit = (string)$administrationUnit;
        return $this;
    }

    /**
     * Gets the corresponding {@see $administrationUnitCode administration unit code}.
     *
     * @return string Returns the administration unit code.
     */
    public function getAdministrationUnitCode()
    {
        return $this->administrationUnitCode;
    }

    /**
     * Sets the corresponding {@see $administrationUnitCode administration unit code}.
     *
     * @param string $administrationUnitCode The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setAdministrationUnitCode($administrationUnitCode)
    {
        $this->administrationUnitCode = (string)$administrationUnitCode;
        return $this;
    }

    /**
     * Gets the corresponding {@see $county county}.
     *
     * @return string Returns the county.
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Sets the corresponding {@see $county county}.
     *
     * @param string $county The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setCounty($county)
    {
        $this->county = (string)$county;
        return $this;
    }

    /**
     * Gets the {@see $postcode postcode}.
     *
     * @return string Returns the postcode.
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Sets the {@see $postcode postcode}.
     *
     * @param  string $postcode The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setPostcode($postcode)
    {
        $this->postcode = (string)$postcode;
        return $this;
    }

    /**
     * Gets the {@see $languageCode language code} in which this locality is represented.
     *
     * @return string Returns the language code.
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets the {@see $languageCode language code} in which this locality is represented.
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
