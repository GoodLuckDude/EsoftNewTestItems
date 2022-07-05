<?php

class Flat
{
    private $address;
    private $entrance;
    private $floor;
    private $apartmentNumber;
    private $roomsCount;

    public function __construct($address, $entrance, $floor, $apartmentNumber, $roomsCount)
    {
        $this->address = (string) $address;
        $this->entrance = (int) $entrance;
        $this->floor = (int) $floor;
        $this->apartmentNumber = (int) $apartmentNumber;
        $this->roomsCount = (int) $roomsCount;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return int
     */
    public function getEntrance()
    {
        return $this->entrance;
    }

    /**
     * @return int
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @return int
     */
    public function getApartmentNumber()
    {
        return $this->apartmentNumber;
    }

    /**
     * @return int
     */
    public function getRoomsCount()
    {
        return $this->roomsCount;
    }
}