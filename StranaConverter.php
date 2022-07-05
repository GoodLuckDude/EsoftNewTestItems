<?php

require_once 'AbstractConverter.php';
require_once 'Flat.php';

class StranaConverter extends AbstractConverter
{
    protected function getFlats()
    {
        return array_reduce(
            $this->reportData,
            function ($flats, $building) {
                return array_merge($flats, $this->getFlatsByBuilding($building));
            },
            []
        );
    }

    /**
     * @param $building
     * @return Flat[]
     */
    private function getFlatsByBuilding($building)
    {
        $address = $building['address'];
        $flats = $building['flats'];

        return array_map(
            function ($flat) use ($address) {
                $roomsCount = $this->convertRoomsCount($flat['type']);

                return new Flat($address, $flat['entrance'], $flat['floor'], $flat['apartment'], $roomsCount);
            },
            $flats
        );
    }

    private function convertRoomsCount($flatType)
    {
        $roomsCountByType = [
            'studio-apartment' => 1,
            'two-roomed' => 2
        ];

        return !empty($roomsCountByType[$flatType]) ? $roomsCountByType[$flatType] : 0;
    }
}