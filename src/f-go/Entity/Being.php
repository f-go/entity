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
 * This class represents an abstract being.
 *
 * @copyright 2015 Frank Göldner
 * @author Frank Göldner <f-go@gmx.de>
 * @package FGo\Entity
 */
abstract class Being
{
    /**
     * Date of birth.
     *
     * @var null|\DateTime
     */
    protected $dateOfBirth = null;

    /**
     * Date of death.
     *
     * @var null|\DateTime
     */
    protected $dateOfDeath = null;

    /**
     * The sex.
     *
     * @var string
     */
    protected $sex = SexCategory::MALE;



    /**
     * Gets the {@see $dateOfBirth date of birth}.
     *
     * @return null|\DateTime Returns the date or <em>NULL</em> if it's not set.
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Sets the {@see $dateOfBirth date of birth}.
     *
     * @param  \DateTime $dateOfBirth The date to set.
     * @return $this Returns the instance of this or a derived class.
     */
    public function setDateOfBirth(\DateTime $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * Unsets the {@see $dateOfBirth date of birth}.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function unsetDateOfBirth()
    {
        $this->dateOfBirth = null;
    }

    /**
     * Checks whether the {@see $dateOfBirth date of birth} is set.
     *
     * @return bool Returns <em>TRUE</em> if the date of birth is set or <em>FALSE</em> if not.
     */
    public function hasDateOfBirth()
    {
        return ($this->dateOfBirth !== null);
    }

    /**
     * Gets the {@see $dateOfDeath date of death}.
     *
     * @return null|\DateTime Returns the date or *NULL* if it's not set.
     */
    public function getDateOfDeath()
    {
        return $this->dateOfDeath;
    }

    /**
     * Sets the {@see $dateOfDeath date of death}.
     *
     * @param  \DateTime $dateOfDeath The date to set.
     * @return $this Returns the instance of this or a derived class.
     */
    public function setDateOfDeath(\DateTime $dateOfDeath)
    {
        $this->dateOfDeath = $dateOfDeath;
    }

    /**
     * Unsets the {@see $dateOfDeath date of death}.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function unsetDateOfDeath()
    {
        $this->dateOfDeath = null;
    }

    /**
     * Checks whether the {@see $dateOfDeath date of death} is set.
     *
     * @return bool Returns *TRUE* if the date of death is set or *FALSE* if not.
     */
    public function hasDateOfDeath()
    {
        return ($this->dateOfDeath !== null);
    }

    /**
     * Gets the age.
     *
     * @throws \RuntimeException This exception is thrown if the date of birth is not set.
     *
     * @return int Returns the age of this being.
     */
    public function getAge()
    {
        if (!$this->hasDateOfBirth()) {
            throw new \RuntimeException('Age could not be calculated. No date of birth is set.');
        }

        $dt = $this->hasDateOfDeath()
            ? $this->getDateOfDeath()
            : new \DateTime('now', $this->dateOfBirth->getTimezone());

        return $this->dateOfBirth->diff($dt)->y;
    }

    /**
     * Get the sex.
     *
     * @return string Returns the sex.
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set the sex.
     *
     * @param string $sex The sex to set.
     * @return $this Returns the instance of this or a derived class.
     */
    public function setSex($sex)
    {
        $sex = strtolower(trim((string)$sex));
        if (!SexCategory::isKnownCategory($sex)) {
            throw new \RuntimeException('Could not set the sex of the being due to an unknown sex category.');
        }
        $this->sex = $sex;
    }
}
