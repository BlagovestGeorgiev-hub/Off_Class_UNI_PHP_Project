<?php

require_once "HashAlgorithm.php";
require_once "HasherInject.php";

class DiContainer implements HasherInject
{
    protected $hasher = null;

    public function __construct(HashAlgorithm $instance)
    {
        $this->hasher = $instance;
    }

    public function hashIt($data)
    {
        return strtoupper($this->hasher->hashData($data));
    }
}
