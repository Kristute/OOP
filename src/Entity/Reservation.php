<?php declare(strict_types = 1);


namespace OOP\Entity;

use DateTime;

class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;

    public function __construct(DateTime $startDate, DateTime $endDate, Guest $guest) {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->guest = $guest;
    }

    public function getGuest() {
        return $this->guest;
    }

    public function __toString()
    {
        return "from <time>{$this->startDate->format("Y-m-d")}</time> to <time>{$this->endDate->format("Y-m-d")}</time>";
    }
}
