<?php

namespace nord;


class MainClass
{

    public $salary;
    public $tax;
    public $extraIncome;

    public function main(array $input)
    {
        if(count($input) < 2){
            print_r('○ 1- Input your yearly income:');
        }
    }
}