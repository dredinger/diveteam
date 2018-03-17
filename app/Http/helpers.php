<?php

function setActiveMenu($routeName, $class = ' active') {
	$current = Route::currentRouteName();
	$segment = Request::segment(1);
	return (($current == $routeName) || (strpos($routeName, $segment) !== false)) ? $class : '';
}

function phoneToReadable($number, $para = true) {
	$areaCode = substr($number, 0, 3);
	$startThree = substr($number, 3, 3);
	$lastFour = substr($number, 6, 4);

	$phoneNumber = $areaCode.'-'.$startThree.'-'.$lastFour;

	if ($para == true) {
		$phoneNumber = '(' . $areaCode . ') ' . $startThree . ' - ' . $lastFour;
	}

	return $phoneNumber;
}

function isDay($day, $date = null) {
	if (!$date)
		$currentDate = new DateTime('now', new DateTimeZone('America/Denver'));
	else
		$currentDate = DateTime::createFromFormat('m / d / Y', $date, new DateTimeZone('America/Denver'));

	return $currentDate->format('N') == $day;
}