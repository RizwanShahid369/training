<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 7:14 AM
 */
$array = array (
    array('full_name', 'dob', 'father_name', 'class', 'address', 'city', 'school'),
    array('Ali', '2000-1-2', 'Khan', '789', 'somewhere', 'lahore', 'abs'),
    array('Aliya', '2000-1-2', 'Khan','56', 'somewhere', 'lahore', 'abs'),
    array('Muneeba', '2000-1-2', 'Mughal','12', 'somewhere', 'lahore', 'tps')
);

$fp = fopen('fileIn.csv', 'w');

foreach ($array as $val) {
    fputcsv($fp, $val);
}

fclose($fp);
