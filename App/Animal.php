<?php

namespace App;

abstract class Animal
{
    protected $name;

    /**
     * Animal constructor.
     * @param string $name
     */
    function __construct($name)
	{
        $this->name = $name;
	}

    /**
     * @return string
     */
    function getName ()
    {
        return $this->name;
    }
}
