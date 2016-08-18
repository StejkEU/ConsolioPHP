<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
require_once __DIR__ . '/../src/Consolio.php'; // Autoload files using Composer autoload

use Consolio\Consolio as Consolio;

$atom = array(
  "troll" => array(
    'lool' => "Muhaha",
    'kok' => "fubfu"
  ),
  "ihihf" => "fhifh",
);

$debugger = new Consolio("Lol", "Troll");
$debugger->dump($atom);
