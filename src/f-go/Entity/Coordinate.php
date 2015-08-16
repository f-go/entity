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
 * This class represents a coordinate.
 *
 * @copyright 2015 Frank Göldner
 * @author Frank Göldner <f-go@gmx.de>
 * @package FGo\Entity
 */
class Coordinate
{
    /**
     * Longitude of the coordinate.
     *
     * @var float
     */
    private $longitude = 0.0;

    /**
     * Latitude of the coordinate.
     *
     * @var float
     */
    private $latitude = 0.0;



    /**
     * Gets the {@see $longitude longitude} of the coordinate.
     *
     * @return float Returns the longitude.
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets the {@see $longitude longitude} of the coordinate.
     *
     * @param  float $longitude The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setLongitude($longitude)
    {
        $this->longitude = (float)$longitude;
        return $this;
    }

    /**
     * Gets the {@see $latitude latitude} of the coordinate.
     *
     * @return float Returns the latitude.
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets the {@see $latitude latitude} of the coordinate.
     *
     * @param  float $latitude The value to set.
     *
     * @return $this Returns the instance of this or a derived class.
     */
    public function setLatitude($latitude)
    {
        $this->latitude = (float)$latitude;
        return $this;
    }
}
