<?php
/**
 * Created by PhpStorm.
 * User: tito
 * Date: 06.08.14
 * Time: 23:42
 */

namespace FGo\Entity;


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
     * @var null
     */
    protected $address = null;
    protected $contactInfo = null;
}