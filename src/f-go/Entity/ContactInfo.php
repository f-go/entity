<?php
/**
 * Created by PhpStorm.
 * User: tito
 * Date: 07.08.14
 * Time: 00:24
 */
namespace FGo\Entity;


class ContactInfo
{
    /**
     * Email address.
     *
     * @var string
     */
    protected $emailAddress = '';

    /**
     * Mobile phone number.
     *
     * @var string
     */
    protected $mobilePhone = '';

    /**
     * Home phone number.
     *
     * @var string
     */
    protected $homePhone = '';

    /**
     * Work phone number.
     *
     * @var string
     */
    protected $workPhone = '';



    /**
     * Gets the {@see $emailAddress email address}.
     *
     * @return string Returns the emailAddress.
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets the {@see $emailAddress email address}.
     *
     * @param string $emailAddress The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = (string)$emailAddress;
        return $this;
    }

    /**
     * Gets the {@see $mobilePhone mobile phone}.
     *
     * @return string Returns the mobilePhone.
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Sets the {@see $mobilePhone mobile phone}.
     *
     * @param string $mobilePhone The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setMobilePhone($mobileNumber)
    {
        $this->mobilePhone = (string)$mobileNumber;
        return $this;
    }

    /**
     * Gets the {@see $homePhone home phone}.
     *
     * @return string Returns the homePhone.
     */
    public function getHomePhone()
    {
        return $this->homePhone;
    }

    /**
     * Sets the {@see $homePhone home phone}.
     *
     * @param string $homePhone The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setHomePhone($phoneNumber)
    {
        $this->homePhone = (string)$phoneNumber;
        return $this;
    }

    /**
     * Gets the {@see $workPhone work phone}.
     *
     * @return string Returns the workPhone.
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * Sets the {@see $workPhone work phone}.
     *
     * @param string $workPhone The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setWorkPhone($phoneNumber)
    {
        $this->workPhone = (string)$phoneNumber;
        return $this;
    }
}