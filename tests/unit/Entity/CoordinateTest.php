<?php
/*
 * This file is part of the entities project.
 *
 * Copyright (c) 2015 Frank Göldner <f-go@gmx.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FGo\Tests\Unit\Entity;


use FGo\Entity\Coordinate;

class CoordinateTest extends \PHPUnit_Framework_TestCase
{
    /** @var Coordinate null  */
    private $testObject = null;

    protected function setUp()
    {
        $this->testObject = new Coordinate();
    }

    protected function tearDown()
    {
        unset($this->testObject);
    }

    public function testGetAndSetLongitude()
    {
        $this->assertInstanceOf('FGo\\Entity\\Coordinate', $this->testObject->setLongitude(1.23));
        $this->assertEquals(1.23, $this->testObject->getLongitude());
    }

    public function testGetAndSetLatitude()
    {
        $this->assertInstanceOf('FGo\\Entity\\Coordinate', $this->testObject->setLatitude(1.23));
        $this->assertEquals(1.23, $this->testObject->getLatitude());
    }
}
