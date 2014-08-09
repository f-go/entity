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
     * Date of birth.
     *
     * <strong>Info:</strong>
     * If this date is set, the age will be calculated dynamically based on this value.
     *
     * @var null|\DateTime
     */
    protected $dateOfBirth = null;

    /**
     * The age.
     *
     * This is an optional value. If the date of birth is set, the age will be calculated dynamically.
     *
     * @var int
     */
    protected $age = 0;

    /**
     * The sex.
     *
     * @var string
     */
    protected $sex = SexCategory::MALE;

    /**
     * Get the date of birth.
     *
     * @return null|\DateTime Returns the date or <em>NULL</em> if it's not set.
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set the date of birth.
     *
     * <strong>Info:</strong>
     * If this date is set, the age will be calculated dynamically based on this value.
     *
     * @param  \DateTime $dateOfBirth The date to set.
     * @return $this Returns the instance of this or a derived class.
     */
    public function setDateOfBirth(\DateTime $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * Unset the date of birth.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function unsetDateOfBirth()
    {
        $this->dateOfBirth = null;
    }

    /**
     * Check if the date of birth is set.
     *
     * @return bool Returns <em>TRUE</em> if the date of birth is set or <em>FALSE</em> if not.
     */
    public function hasDateOfBirth()
    {
        return ($this->dateOfBirth !== null);
    }

    /**
     * Get the age.
     *
     * <strong>Note:</strong>
     * This value is can be both, the static value you set with the method {@see Being::setAge()} or the calculated
     * age if the date of birth is set. When the date of birth is set, this value is always calculated.
     *
     * @return int Returns the age of this being.
     */
    public function getAge()
    {
        if ($this->hasDateOfBirth()) {
            return $this->dateOfBirth->diff(new \DateTime('now', $this->dateOfBirth->getTimezone()))->y;
        }

        return $this->age;
    }

    /**
     * Set the age.
     *
     * <strong>Note:</strong>
     * If the date of birth is set, the age will be calculated automatically
     * and value you set with this method will be ignored.
     *
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
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
