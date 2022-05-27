<?php

class Programmer 
{
    public string $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer { 
    public string $tipe = "Backend Programmer"; 
}

class FrontendProgrammer extends Programmer { 
    public string $tipe = "Frontend Programmer"; 
}

class Company
{
    public Programmer $programmer;
}