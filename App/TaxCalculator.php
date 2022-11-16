<?php

namespace App;

class TaxCalculator
{

    private $totalIncome;
    private $salary;

    public function calculateTotalIncome($salary, $tax = 0, $extraIncome = 0)
    {
        $this->salary = $salary;
        $this->totalIncome = $salary + $extraIncome - $tax;
        return $this->calculateTax($this->salary, $this->totalIncome);
        
    }

    public function calculateTax($salary, $totalIncome)
    {
        if($salary < 30000){
            $tax = ($totalIncome * 0.20);
            return $tax;
        }
        else if($salary >= 30000){
            $tax = ($totalIncome * 0.25);
            return $tax;
        }
    }
}