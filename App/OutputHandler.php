<?php

namespace App;

class OutputHandler
{
    public function output($resultToPrintOut)
    {
        return print_r($resultToPrintOut);
    }
}