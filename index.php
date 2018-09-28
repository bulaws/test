<?php
require_once 'src/Cat.php';
use Cats\Cat;

$cat = new Cat('Garfield');
echo $cat->getName () === 'Garfield';
echo $cat->meow () === 'Cat Garfield is saying meow';