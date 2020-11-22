<?php

if (php_sapi_name() !== 'cli') {
    exit;
}

require __DIR__ . '/vendor/autoload.php';

use App\Client;

$animals = json_decode(file_get_contents(__DIR__ . '/animals.json'), true);

if (empty($animals) || !is_array($animals)) {
    echo 'No proper data specified.' . PHP_EOL;
    return;
}

foreach ($animals as $animal) {
    $species = $animal['species'];

    echo $species . PHP_EOL;
    $animalFactory = $species . 'Factory';

    $client = new Client();
    $factoryName = 'App\\'.$animalFactory;

    $client->execute(new $factoryName());
    echo '--------' . PHP_EOL;
}