<?php
$recipes = '37';
$elf1 = 0;
$elf2 = 1;
$afterLimit = 554401;
while (strlen($recipes) < ($afterLimit + 10)) {
    $recipes .= $recipes[$elf1] + $recipes[$elf2];
    $elf1 = ($elf1 + $recipes[$elf1] + 1) % strlen($recipes);
    $elf2 = ($elf2 + $recipes[$elf2] + 1) % strlen($recipes);
}
echo 'The result: ' . substr($recipes, -10) . PHP_EOL;