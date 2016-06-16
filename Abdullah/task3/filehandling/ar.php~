<?php
$li = array (
    array('"aaa"', '"bbb"')
);

$fp = fopen('a.csv', 'w');

foreach ($li as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);

$file = fopen("a.csv", "r");
while(!feof($file)) {

    print_r(fgetcsv($file));
}
fclose($file);


