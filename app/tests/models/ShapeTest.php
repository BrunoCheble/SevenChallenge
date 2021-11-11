<?php

namespace Challenge\models;

use Challenge\container\providers\IncrementersId\models\Timestamp;
use PHPUnit\Framework\TestCase;

class ShapeTest extends TestCase
{
    public function testCalculateAreaEqualToZero()
    {
        $length = 0;
        $width = 0;

        $incrementer = new Timestamp();
        $shape = new Shape($incrementer, $length, $width);

        $this->assertEquals(0, $shape->getCalculatedArea());
    }

    public function testRandomShapeIsSameClass()
    {
        $new_shape = Shape::getRandomShape();
        $this->assertInstanceOf(Shape::class, $new_shape);
    }

    public function testGetShapeType()
    {
        $this->assertEquals(Shape::SHAPE_TYPE, Shape::getShapeType());
    }
}