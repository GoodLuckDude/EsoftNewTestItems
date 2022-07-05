<?php

abstract class AbstractConverter
{
    /**
     * @var array
     */
    protected $reportData;

    public function __construct($developerReport)
    {
        $this->reportData = $developerReport;
    }

    public function convert()
    {
        $flats = $this->getFlats();

        return array_map(
            function ($flat) {
                return [
                    'address' => $flat->getAddress(),
                    'entrance' => $flat->getEntrance(),
                    'floor' => $flat->getFloor(),
                    'apartmentNumber' => $flat->getApartmentNumber(),
                    'roomsCount' => $flat->getRoomsCount()
                ];
            },
            $flats
        );
    }

    /**
     * @return Flat[]
     */
    abstract protected function getFlats();
}