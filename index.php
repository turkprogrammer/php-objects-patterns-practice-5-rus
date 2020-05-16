<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

if (!empty($argv[1])) {
    $path = $argv[1];

    try {
        $runnerClassName = 'vitaliyviznyuk\popp5rus\\' . $path . '\Runner';
        $runner = new $runnerClassName();
        $runner->run();
    } catch (Throwable $exception) {
        echo 'Unable to run batch.' . PHP_EOL;
        echo 'Error: ' . $exception->getMessage() . PHP_EOL;
        echo 'File: ' . $exception->getFile() . PHP_EOL;
        echo 'Line: ' . $exception->getLine() . PHP_EOL;
    }
} else {
    echo 'Please, specify the path to the batch file as an argument, like "php index.php ch03\\\batch01"' . PHP_EOL;
}
