<?php

namespace app\database\models;

abstract class models
{
    protected $connect;
    
    public function __construct()
    {
        $this->connect = Connect::connect();
    }
}