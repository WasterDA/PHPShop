<?php

namespace ControllerOne;    

class ConOne
{
    public $xyz;

    public function __construct($xyz) {
        $this->xyz = $xyz;
    }

    public function printResult()    
    {
        echo $this->xyz;
    }


}


?>