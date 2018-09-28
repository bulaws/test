<?php
namespace Cats;
require_once 'Animal.php';

use Animals\Animal;

class Cat extends Animal
{
    /**
     * method for cat saying meow
     * @return string
     */
    public function meow ()
    {
        $meow = "Cat $this->name is saying meow";
        return $meow;
    }
}