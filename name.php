<?php
/**
 * Created by PhpStorm.
 * User: Bosunski
 * Date: 7/16/18
 * Time: 8:25 PM
 */

if (file_exists('names.txt'))
{
	$namesBuffer = file_get_contents('names.txt');

	$names = explode(',', $namesBuffer);

	$buffer = "<h1> These are the people that got their hands dirty</h1>";

	$name = '';

	foreach ($names as $value)
	{
		$buffer .= $value . '<br>';
	}

	echo $buffer;
}
else
{
	echo "<h1> Attendees list not available!</h1>";
}
