<?php

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