<?php

namespace Challenge\models;

use Challenge\container\providers\IncrementersId\models\Timestamp;
use Challenge\container\providers\IncrementersId\dtos\IIncrementerId;

class Circle extends Shape
{
    const SHAPE_TYPE = 3;

    protected $radius;

    /**
     * Circle constructor.
     * @param IIncrementerId $incrementer
     * @param float|int $radius
     */
    public function __construct(IIncrementerId $incrementer, $radius = 0)
    {
        parent::__construct($incrementer);
        $this->setRadius($radius);
    }

    /**
     * @param float $radius
     */
    protected function setRadius(float $radius)
    {
        $this->radius = $radius > 0 ? $radius : 0;
    }

    /**
     * @return float
     */
    protected function getRadius() : float
    {
        return $this->radius;
    }

    /**
     * @return float|int
     */
    public function getCalculatedArea() : float
    {
        return $this->getRadius() > 0 ? pow($this->getRadius(), 2) * M_PI : 0;
    }

    /**
     * @return Circle|Shape|static
     */
    public static function getRandomShape(): Shape
    {
        $radius = rand(1, 1000);

        $incrementer = new Timestamp();

        $random_shape = new static($incrementer, $radius);
        $random_shape->setRandomName('Random Circle');

        return $random_shape;
    }
}