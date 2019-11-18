<?php declare(strict_types=1);


namespace OOP\Entity;


class Bedroom extends Room
{
    public function __construct(int $room_number, int $price)
    {
        parent::__construct($room_number, $price);
        $this->room_number = $room_number;
        $this->price = $price;
        $this->bed_count = 2;
        $this->room_type = 'Gold';
        $this->restroom = true;
        $this->balcony = true;
        $this->extras = ['TV', 'air-conditioner', 'refrigerator', 'mini-bar', 'bathtub'];
    }

}
