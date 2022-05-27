<?php

require_once "Trait.php";

trait All {
    use GoodBye, Hello, HasName;
}

class TraitInheritance {
    use All;
}