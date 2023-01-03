<?php
$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$result = array_map(function (int $number) {
return $number % 2 & 1 ? "нечетное" : "четное";
}, $numbers);
print_r($result);
