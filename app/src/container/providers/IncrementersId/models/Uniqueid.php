<?php

namespace Challenge\container\providers\IncrementersId\models;

use Challenge\container\providers\IncrementersId\dtos\IIncrementerId;

class Uniqueid implements IIncrementerId 
{
    public function generate() 
    {
        return uniqid();
    }
}