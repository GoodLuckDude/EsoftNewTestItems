<?php

require_once 'ConverterFactory.php';

$report = json_decode(stream_get_contents(STDIN), true);

$reportConverter = (new ConverterFactory($report))->getConverter();

die(json_encode($reportConverter->convert(), JSON_UNESCAPED_UNICODE));