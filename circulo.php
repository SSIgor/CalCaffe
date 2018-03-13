<?php

$r = filter_input(INPUT_POST, 'raio');

$areacirculo = ($r*$r)*3.14;

echo "A área do seu Círculo é de $areacirculo";