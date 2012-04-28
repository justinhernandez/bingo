<?php

require('words.php');

function rows($list)
{
	shuffle($list);
	$list = array_values(array_unique($list));
	$collection = '';
	$stop = 25;
	$columns = 5;

	for ($a=0; $a<$stop; $a++)
	{
		if (($a % $columns) == 0)
			$collection .= '<tr>';

		if ($a != 12)
		{
			$collection .= "<td>{$list[$a]}</td>";
		}
		else
		{
			$collection .= "<td class='free-space'>FREE</td>";
		}

		if (($a % $columns) == ($columns - 1))
			$collection .= '</tr>';
	}

	return $collection;
}