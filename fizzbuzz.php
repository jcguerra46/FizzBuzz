<?php

function fizzBuzz($n)
{
	foreach (range(1, $n) as $nun) {
	    echo getOutput($nun) . '<br />';
	}
}

function getOutput($n)
{
	$fizzes = [
	    $n % 3 => 'Fizz',
	    $n % 5 => 'Buzz',
	    $n % 15 => 'FizzBuzz',
	];

    return array_key_exists(0, $fizzes) ? $fizzes[0] : $n;
}

$n = rand(15, 120);

fizzBuzz($n);