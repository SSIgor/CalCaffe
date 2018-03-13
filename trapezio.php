<?php

$h = filter_input(INPUT_POST, 'altura');
$bmaior = filter_input(INPUT_POST, 'basemaior');
$bmenor = filter_input(INPUT_POST, 'basemenor');

$areatrapezio = $h*($bmaior+$bmenor)/2;

echo "A área do seu Trapézio é de $areatrapezio";