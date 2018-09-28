<?php
namespace Animals;

class Animal
{
    protected $name;

    /**
     * constructor  Animal
     * @param string $name
     */
    public function __construct ($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName ()
    {
        return $this->name;
    }
}