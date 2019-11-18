<?php declare(strict_types = 1);


namespace OOP\Entity;


class Guest {

    private $firstName = '';
    private $lastName = '';

    public function __construct( string $firstName, string $lastName ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString() {
        return "<strong>{$this->firstName} {$this->lastName}</strong>";
    }
}
