<?php declare(strict_types=1);


namespace OOP\Entity;


class Apartment extends Room
{
    public function __construct(int $room_number, int $price)
    {
        parent::__construct($room_number, $price);
        $this->room_number = $room_number;
        $this->price = $price;
        $this->bed_count = 4;
        $this->room_type = 'Diamond';
        $this->restroom = true;
        $this->balcony = true;
        $this->extras = ['TV', 'air-conditioner', 'refrigerator', 'kitchen box', 'mini-bar', 'bathtub', 'free Wi-fi'];
    }
}
