<?php
function fizbuzz($limit)
{
    $i = 0;
    while ($i <= $limit) {
        $yield = null;
        if ($i % 3 == 0) {$yield = "fizz";}
        if ($i % 5 == 0) {$yield .= "buzz";}
        yield $yield;
        $i++;
    }
    return;
}

foreach (fizbuzz(25) as $key => $value) {
    echo "{$key} => {$value}\n";
}
