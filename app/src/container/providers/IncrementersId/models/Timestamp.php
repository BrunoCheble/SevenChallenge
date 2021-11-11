<?php

namespace Challenge\container\providers\IncrementersId\models;

use Challenge\container\providers\IncrementersId\dtos\IIncrementerId;

class Timestamp implements IIncrementerId 
{
    public function generate() 
    {
        return time();
    }
}