<?php

namespace App;

use App\InputHandler;

class MainClass
{

    public function main()
    {
        return ((new InputHandler)->main());
    }
    
    
}
