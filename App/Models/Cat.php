<?php

namespace App\Models;

use App\Animal;

class Cat extends Animal
{
    /**
     * @return string
     */
    function meow()
    {
        return 'Cat ' . $this->name . ' is saying meow';
    }
}
