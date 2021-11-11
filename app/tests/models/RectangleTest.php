<?php

namespace Challenge\models;

use PHPUnit\Framework\TestCase;
use Challenge\container\providers\IncrementersId\models\Timestamp;

class RectangleTest extends TestCase
{
    public function testCalculateArea()
    {
        $length = 4;
        $width = 4;
        $incrementer = new Timestamp();

        $rectangle = new Rectangle($incrementer, $length, $width);

        $this->assertEquals(16, $rectangle->getCalculatedArea());
    }

    public function testRandomShapeIsSameClass()
    {
        $new_rectangle = Rectangle::getRandomShape();
        $this->assertInstanceOf(Rectangle::class, $new_rectangle);
    }

    public function testGetShapeType()
    {
        $this->assertEquals(Rectangle::SHAPE_TYPE, Rectangle::getShapeType());
    }

    public function testGetIdIsNotEmpty()
    {
        $rectangle = Rectangle::getRandomShape();
        $this->assertNotEmpty($rectangle->getId());
    }
}