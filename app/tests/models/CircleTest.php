<?php

namespace Challenge\models;

use Challenge\container\providers\IncrementersId\models\Uniqueid;
use PHPUnit\Framework\TestCase;
use Challenge\App;


class CircleTest extends TestCase
{
    public function testCalculateArea()
    {
        $radius = 10;

        $incrementer = new Uniqueid();
        $circle = new Circle($incrementer, $radius);

        $this->assertEquals(314.15926535898, $circle->getCalculatedArea());
    }

    public function testGetShapeType()
    {
        $this->assertEquals(Circle::SHAPE_TYPE, Circle::getShapeType());
    }

    public function testRandomShapeIsSameClass()
    {
        $new_circle = Circle::getRandomShape();
        $this->assertInstanceOf(Circle::class, $new_circle);
    }
}