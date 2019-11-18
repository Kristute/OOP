<?php


namespace OOP\Entity;

interface ReservableInterface
{
    public function addReservation(Reservation $reservation);

    public function removeReservation(Reservation $reservation);
}
