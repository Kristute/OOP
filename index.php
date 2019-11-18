<?php
require_once "vendor/autoload.php";

use OOP\Entity\SingleRoom;
use OOP\Entity\Guest;
use OOP\Entity\Reservation;
use OOP\Entity\BookingManager;

$room = new SingleRoom(1408, 99);
$guest = new Guest('Vardenis', 'Pavardenis');
$startDate = new DateTime('2019-04-20');
$endDate = new DateTime('2019-04-25');
$reservation = new Reservation($startDate, $endDate, $guest);

BookingManager::bookRoom($room, $reservation);
