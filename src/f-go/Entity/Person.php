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
 * This class represents a person.
 *
 * @copyright 2015 Frank Göldner
 * @author Frank Göldner <f-go@gmx.de>
 * @package FGo\Entity
 */
class Person extends Being
{
    /**
     * The person's first name.
     *
     * @var string
     */
    protected $firstName = '';

    /**
     * The person's last name.
     *
     * @var string
     */
    protected $lastName = '';

    /**
     * The person's address.
     *
     * @var null|Address
     */
    protected $address = null;

    /**
     * Person's contact info.
     *
     * @var null|ContactInfo
     */
    protected $contactInfo = null;


    
    /**
     * Gets the {@see $firstName first name}.
     *
     * @return string Returns the firstName.
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the {@see $firstNamefirst name}.
     *
     * @param string $firstName The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setFirstName($firstName)
    {
        $this->firstName = (string)$firstName;
        return $this;
    }

    /**
     * Gets the {@see $lastNamelast name}.
     *
     * @return string Returns the lastName.
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the {@see $lastName last name}.
     *
     * @param string $lastName The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setLastName($lastName)
    {
        $this->lastName = (string)$lastName;
        return $this;
    }

    /**
     * Gets the {@see $address address}.
     *
     * @return Address|null Returns the address.
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the {@see $address address}.
     *
     * @param Address $address The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Unsets the {@see $address address}.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function unsetAddress()
    {
        $this->address = null;
        return $this;
    }

    /**
     * Checks whether the {@see $address address} is set or not.
     *
     * @return bool Returns *TRUE* if the address is set or *FALSE* if not.
     */
    public function hasAddress()
    {
        return $this->address !== null;
    }

    /**
     * Gets the {@see $contactInfo contact info}.
     *
     * @return ContactInfo|null Returns the contact info.
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets the {@see $contactInfo contact info}.
     *
     * @param ContactInfo $contactInfo The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setContactInfo(ContactInfo $contactInfo)
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }

    /**
     * Unsets the {@see $contactInfo contact info}.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function unsetContactInfo()
    {
        $this->contactInfo = null;
        return $this;
    }

    /**
     * Checks whether the {@see $contactInfo contact info} is set or not.
     *
     * @return bool Returns *TRUE* if the contact info is set or *FALSE* if not.
     */
    public function hasContactInfo()
    {
        return $this->contactInfo !== null;
    }
}
