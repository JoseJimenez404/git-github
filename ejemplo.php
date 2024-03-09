<?php

function mostrarNumero(int | float $numero1, int | float $numero2) : int{
	return $numero1 + $numero2;
}
echo(mostrarNumero(5,9));