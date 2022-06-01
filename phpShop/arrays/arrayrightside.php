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
            0 => ['Hamburger'],
            1 => ['Cheeseburger'],
            2 => ['McChicken'],
            3 => ['Crispy Chicken'],
            4 => ['Chicken Sandwich'],
            5 => ['McDouble'],
            6 => ['Double Cheeseburger'],
            7 => ['Cheese and Bacon'],
            8 => ['Chicken Sandwich'],
        ];

        $this->burger = [
            0 => [''],
            1 => [''],
            2 => [''],
            3 => [''],
            4 => [''],
            5 => [''],
            6 => [''],
            7 => [''],
            8 => [''],
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

        $this->desert    = [
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


 


}