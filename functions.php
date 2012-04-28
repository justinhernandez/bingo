<?php

require('words.php');

function rows($list)
{
	shuffle($list);
	$list = array_unique($list);
	$collection = '';
	$stop = 25;
	$columns = 5;

	for ($a=0; $a<$stop; $a++)
	{
		if (($a % $columns) == 0)
			$collection .= '<tr>';

		$collection .= "<td>{$list[$a]}</td>";

		if (($a % $columns) == ($columns - 1))
			$collection .= '</tr>';
	}

	return $collection;
}