<?php
// Polymophism adalah kemampuan object untuk berubah bentuk
// perubahan hanya bisa untuk kelas turunannya

require_once "polymorphism.php";

$company = new Company();
$company->programmer = new Programmer("Andri");
var_dump($company);

$company->programmer = new BackendProgrammer("Andreas");
var_dump($company);

$company->programmer = new FrontendProgrammer("Andri Andreas");
var_dump($company);


// FUNCTION ARGUMENT POLYMORPHISM

function sayHelloProgrammer(Programmer $programmer)
{
    echo "<br> Hello, $programmer->name ($programmer->tipe)";
}

sayHelloProgrammer(new BackendProgrammer("Andri"));
sayHelloProgrammer(new FrontendProgrammer("Andreas"));

// INSTANCEOF

function sayHello(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) {
        echo "<br> Hello, $programmer->name (Backend Programmer)";
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "<br> Hello, $programmer->name (Frontend Programmer)";
    } else if ($programmer instanceof Programmer) {
        echo "<br> Hello, $programmer->name (Programmer)";
    }
}

sayHello(new BackendProgrammer("Andri"));
sayHello(new FrontendProgrammer("Andreas"));