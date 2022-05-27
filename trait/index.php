<?php

require_once "Trait.php";

$person = new Person();
$person->goodBye("andri");
$person->sayHello("andreas");
$person->sayFullName("Andri Andreas");

// Contoh Trait Properties
$person->name = "Wilsen Repaldi Julistian";
echo "<br> $person->name";


// TRAINT CONFLICT
require_once "TraitConflict.php";

$conflict = new Conflict();
$conflict->doA();
$conflict->doB();


// TRAINT CONFLICT
require_once "TraitInheritance.php";

$traitInherit = new TraitInheritance();
$traitInherit->sayHello("andreas");