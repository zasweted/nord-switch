<?php

namespace App;

use App\OutputHandler;
use App\TaxCalculator;

class InputHandler
{

    private $salary;
    private $tax;
    private $extraIncome;


    public function main()
    {

        $number = readline(
            "\n\n*****TAX CALCULATOR*****\n\n1- Input your yearly income (salary based).\n2- Input the amount of tax exemption (if any). \n3- Input your additional income. \n4- Calculate Tax. \n5- Quit.\n\n*****TAX CALCULATOR*****\n\n"
        );

        if($number < 1 || $number > 5){
            (new OutputHandler)->output("Please use numbers from 1 to 5 to navigate.\n=====\n");
            return $this->main();
        }else if ($number == 1) {
            $salary = readline('***Enter salary: ');
            $this->salary = $salary;
            return $this->menu();
        } else if ($number == 2) {
            $taxExemption = readline('***Enter tax exemption: ');
            $this->tax = $taxExemption;
            return $this->menu();
        } else if ($number == 3) {
            $extraInc = readline('***Enter additional income: ');
            $this->extraIncome = $extraInc;
            return $this->menu();
        } else if ($number == 4) {
            $result = ((new TaxCalculator)->calculateTotalIncome($this->salary, $this->tax, $this->extraIncome));
            (new OutputHandler)->output("***Tax : $result");
            return $this->menu();
        } else if ($number == 5) {
            (new OutputHandler)->output("***Farewell, thank you for using our tax calculator :)");
        }
    }

    public function menu()
    {
        $number = readline(
            "\n\n*****TAX CALCULATOR*****\n\n1- Input your yearly income (salary based).\n2- Input the amount of tax exemption (if any). \n3- Input your additional income. \n4- Calculate Tax. \n5- Quit.\n\n*****TAX CALCULATOR*****\n\n"
        );
        if($number < 1 || $number > 5){
            (new OutputHandler)->output("Please use numbers from 1 to 5 to navigate.\n=====\n");
            return $this->main();
        }else if ($number == 1) {
            $salary = readline('***Enter salary: ');
            $this->salary = $salary;
            return  $this->main();
        } else if ($number == 2) {
            $taxExemption = readline('***Enter tax exemption: ');
            $this->tax = $taxExemption;
            return  $this->main();
        } else if ($number == 3) {
            $extraInc = readline('***Enter additional income: ');
            $this->extraIncome = $extraInc;
            return  $this->main();
        } else if ($number == 4) {
            $result = ((new TaxCalculator)->calculateTotalIncome($this->salary, $this->tax, $this->extraIncome));
            (new OutputHandler)->output("***Tax : $result");
            return $this->main();
        } else if ($number == 5) {
            (new OutputHandler)->output("***Farewell, thank you for using our tax calculator :)");
            
        }
    }
}