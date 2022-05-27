<?php

trait GoodBye
{
    public function goodBye(string $name) : void
    {
        if (is_null($name)) {
            echo "Good Bye";
        } else {
            echo "<br> Good Bye $name";
        }
    }
}

trait Hello
{
    public function sayHello(string $name) : void
    {
        if (is_null($name)) {
            echo "Hello";
        } else {
            echo "<br> Hello $name";
        }
    }
}

// Contoh Trait Properties
trait HasName {
    public string $name;
}

class Person {
    use GoodBye, Hello, HasName;

    function sayFullName($name) 
    {
        $this->sayHello($name);
    }

    // OVERRIDE TRAIT FUNCTION
    
    // function sayHello(string $name): void
    // {
    //     echo "<br> Hello, $name from Override function";
    // }

}