<?php declare(strict_types = 1);


namespace OOP\Entity;


use Exception;

class BookingManager
{
    public static function bookRoom (Room $room, Reservation $reservation)
    {
        try {
            $room->addReservation($reservation);
            echo "Room {$room->__toString()} successfully booked for {$reservation->getGuest()->__toString()} {$reservation->__toString()}!";
        }
        catch (Exception $e) {
            echo "Something went wrong!";
        }
    }
}
