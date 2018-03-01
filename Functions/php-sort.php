<?php

$listToUse = 'Planets';
$listToUseLowercase = strtolower($listToUse);

// Include the list to use, relative to where this file is located
include(dirname(__DIR__) . '/Lists/' . $listToUse . '/' . $listToUse . '.php');

// Use the array in this file, called "items"
$items = ${$listToUseLowercase};

// Sort the items array
sort($items);

// Output the results on screen
foreach ($items as $item) {
	echo $item . "\n";
}
