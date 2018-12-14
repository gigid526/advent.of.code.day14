<?php
$recipes = '37';
$elf1 = 0;
$elf2 = 1;
$pattern = '554401';
$patternL = strlen($pattern);
$i = 0;
while (++$i>0) {
    $recipes .= $recipes[$elf1] + $recipes[$elf2];
    $recipesS = strlen($recipes);
    $elf1 = ($elf1 + $recipes[$elf1] + 1) % $recipesS;
    $elf2 = ($elf2 + $recipes[$elf2] + 1) % $recipesS;
    if ($i % 100000 === 0) {
        echo $recipesS . PHP_EOL;
    }
    if (substr($recipes, -$patternL) == $pattern) {
        echo 'The result: ' . ($recipesS - $patternL) . PHP_EOL;
        break;
    }
    if (substr($recipes, -$patternL - 1, -1) == $pattern) {
        echo 'The result: ' . ($recipesS - $patternL - 1) . PHP_EOL;
        break;
    }
}