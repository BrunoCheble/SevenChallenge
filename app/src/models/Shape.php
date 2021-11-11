<?php

namespace Challenge\models;

use Challenge\container\providers\IncrementersId\dtos\IIncrementerId;
use Challenge\container\providers\IncrementersId\models\Uniqueid;

class Shape
{
    public $name;
    protected $width;
    protected $length;
    private $id;

    const SHAPE_TYPE = 1;

    /**
     * Shape constructor.
     * @param IIncrementerId $incrementer
     * @param int $width
     * @param int $length
     */
    public function __construct(IIncrementerId $incrementer, $width = 0, $length = 0)
    {
        $this->setWidth($width);
        $this->setLength($length);
        $this->setId($incrementer);
    }

    /**
     * @param float $width
     */
    protected function setWidth(float $width)
    {
        $this->width = $width > 0 ? $width : 0;
    }

    /**
     * @return float
     */
    protected function getWidth() : float
    {
        return $this->width;
    }

    /**
     * @param float $length
     */
    protected function setLength(float $length)
    {
        $this->length = $length > 0 ? $length : 0;
    }

    /**
     * @return float
     */
    protected function getLength() : float
    {
        return $this->length;
    }

    private function setId($incrementer)
    {
        $this->id = $incrementer->generate();
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|string $prefix
     */
    protected function setRandomName(string $prefix = 'Random Shape')
    {
        $name = $prefix.' - '.$this->getId();
        $this->setName($name);
    }

    /**
     * @return float|int
     */
    public function getCalculatedArea()
    {
        return $this->getWidth() > 0 && $this->getLength() > 0 ? $this->getWidth() * $this->getLength() : 0;
    }

    /**
     * @return int
     */
    public static function getShapeType(): int
    {
        return static::SHAPE_TYPE;
    }

    /**
     * @return static
     */
    public static function getRandomShape(): Shape
    {
        $width = rand(1, 1000);
        $length = rand(1, 1000);

        $incrementer = new Uniqueid();
        $new_shape = new static($incrementer, $length, $width);

        $new_shape->setRandomName();

        return $new_shape;
    }
}