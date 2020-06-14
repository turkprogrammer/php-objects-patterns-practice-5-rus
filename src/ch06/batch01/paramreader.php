<?php

namespace vitaliyviznyuk\popp5rus\ch06\batch01;

/* Листинг 06.01 */
function readParams(string $source): array
{
    $params = [];
    // read text parameters from $source
    /* /Листинг 06.01 */
    $fh = fopen($source, 'r') or die("problem with $source");
    while (!feof($fh)) {
        $line = trim(fgets($fh));
        if (!preg_match("/:/", $line)) {
            continue;
        }
        list($key, $val) = explode(':', $line);
        if (!empty($key)) {
            $params[$key] = $val;
        }
    }
    fclose($fh);

    /* Листинг 06.01 */
    return $params;
}

function writeParams(array $params, string $source)
{
    // write text parameters to $source
    /* /Листинг 06.01 */
    $fh = fopen($source, 'w') or die("problem with $source");
    foreach ($params as $key => $val) {
        fputs($fh, "$key:$val\n");
    }
    fclose($fh);
    /* Листинг 06.01 */
}
/* /Листинг 06.01 */
