<?php

$dmaior = filter_input(INPUT_POST, 'diagonalmaior');
$dmenor = filter_input(INPUT_POST, 'diagonalmenor');

$arealosango = ($dmaior*$dmenor)/2;

echo "A área do seu Losango é de $arealosango";
echo "<br/> <a href='index.php'>Voltar</a>";
