<?php

namespace ArraysRSide;

class ArraysRSide
{

    private array $breakfast;
    private array $burger;
    private array $drinks;
    private array $desert;

    public function __construct() 
    {

        $this->breakfast = [
            0 => [],
            1 => [],
            2 => [],
            3 => [],
            4 => [],
            5 => [],
            6 => [],
            7 => [],
            8 => [],
        ];

        $this->burger = [
            0 => ['Hamburger','Hamburger.png','1'],
            1 => ['Cheeseburger','Cheeseburger.png','2'],
            2 => ['McChicken','McChicken.png','3'],
            3 => ['Crispy Chicken','CrispyChicken.png','2'],
            4 => ['Chicken Sandwich','ChickenSandwich.png','4'],
            5 => ['McDouble','McDouble.png','3'],
            6 => ['Double Cheeseburger','DoubleCheeseburger.png','3'],
            7 => ['Cheese and Bacon','CheeseandBacon.png','2'],
            8 => ['Chicken Sandwich','ChickenSandwich.png','3'],
        ];

        $this->drinks = [
            0 => [],
            1 => [],
            2 => [],
            3 => [],
            4 => [],
            5 => [],
            6 => [],
            7 => [],
            8 => [],
        ];

        $this->desert = [
            0 => [],
            1 => [],
            2 => [],
            3 => [],
            4 => [],
            5 => [],
            6 => [],
            7 => [],
            8 => [],
        ];

    }

    public function getBurgerArray()
    {
        $burger = [];

        foreach($this->burger as $key => $value)
        {
            $burger[] = $value;
        }
        
        return $burger;

    }

}