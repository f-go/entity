<?php
/**
 * Created by PhpStorm.
 * User: tito
 * Date: 06.08.14
 * Time: 23:31
 */
namespace FGo\Entity;

class Being
{
    /**
     * Date of birth of this being.
     *
     * @var null|\DateTime
     */
    protected $dateOfBirth = null;

    /**
     * The sex of the being.
     *
     * @var string
     */
    protected $sex = SexCategory::MALE;

    /**
     * Get the date of birth of this being.
     *
     * @return null|\DateTime Returns the date or <em>NULL</em> if it is not set.
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set the date of birth of this being.
     *
     * @param  \DateTime $dateOfBirth The date to set.
     * @return $this Returns the instance of this or a derived class.
     */
    public function setDateOfBirth(\DateTime $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * Check if the date of birth of this being is set.
     *
     * @return bool Returns <em>TRUE</em> if the date of birth is set or <em>FALSE</em> if not.
     */
    public function hasDateOfBirth()
    {
        return ($this->dateOfBirth !== null);
    }

    /**
     * Calculate the age of this being.
     *
     * @return int Returns the age of this being.
     */
    public function getAge()
    {
        if (!$this->hasDateOfBirth()) {
            throw new \RuntimeException('Could not calculate age of being. Date of birth is not set.');
        }

        return $this->dateOfBirth->diff(new \DateTime('now', $this->dateOfBirth->getTimezone()))->y;
    }

    /**
     * Get the sex of the being.
     *
     * @return string Returns the sex.
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set the sex of the being.
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
