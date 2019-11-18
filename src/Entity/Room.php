<?php declare(strict_types = 1);


namespace OOP\Entity;

class Room implements ReservableInterface
{
    private $reservationArray = array();
    protected $bed_count;
    protected $room_type;
    protected $restroom;
    protected $balcony;
    protected $extras;
    protected $room_number;
    protected $price;

    public function __construct(int $room_number, float $price)
    {
        $this->room_number = $room_number;
        $this->price = $price;
    }

    public function addReservation(Reservation $reservation)
    {
        array_push($this->reservationArray, $reservation);
    }

    public function removeReservation(Reservation $reservation)
    {
        if (($reservation = array_search($reservation, $this->reservationArray)) !== false) {
            unset($this->reservationArray[$reservation]);
        };
    }

    public function __toString()
    {
        return "<strong>{$this->room_number}</strong>";
    }
}
