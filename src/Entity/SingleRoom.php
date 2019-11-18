<?php declare(strict_types=1);


namespace OOP\Entity;


class SingleRoom extends Room
{
    public function __construct(int $room_number, int $price)
    {
        parent::__construct($room_number, $price);
        $this->room_number = $room_number;
        $this->price = $price;
        $this->bed_count = 1;
        $this->room_type = 'Standard';
        $this->restroom = true;
        $this->balcony = false;
        $this->extras = ['TV', 'air-conditioner'];
    }

}
