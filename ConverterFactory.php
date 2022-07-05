<?php

require_once 'StranaConverter.php';

class ConverterFactory
{
    private $report;

    public function __construct($report)
    {
        $this->report = $report;
    }

    public function getConverter()
    {
        switch ($this->report['developerType']) {
            case 1:
                return new StranaConverter($this->report['newBuildings']);
        }
    }
}