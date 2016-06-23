<?php
$list = array
(
    "husnain,zaheer,ahmad,hassan",
    "bilal,usman,waseem,akram",
);

$file = fopen("contacts.csv", "w");

foreach ($list as $line) {
    fputcsv($file, explode(',', $line));
}

fclose($file);
echo "Contacts information has been written to the csv file";
?>