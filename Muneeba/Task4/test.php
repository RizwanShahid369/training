<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 6:01 AM
 */
/*error_reporting(E_ALL); ini_set('display_errors','1');
 exec('ls -al',$out);
var_dump($out);
echo __DIR__;*/
/*$myfile = fopen("some", "r") or die("Unable to open file!");
echo fread($myfile,filesize("some"));
fclose($myfile);*/
//$myfile = $myfile . "\n It's a Sunny Day.";

// read from one file and write to the other
/*$my_file = file_get_contents("some");
echo $my_file;
$my_file = $my_file . "\nIt's a Sunny Day.";
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $my_file);
fclose($myfile);

echo "<br>";

/*$my_file = file_get_contents("some");
echo $my_file;*/

//read from file char by char and print cahr by char
$myfileInput = fopen("some", "r") or die("Unable to open file!");
$myfileOutput = fopen("newfileO.txt", "w") or die("Unable to open file!");
// Output one character until end-of-file
while (!feof($myfileInput)) {
    fwrite($myfileOutput, fgetc($myfileInput). ',');
}
fclose($myfileInput);
fclose($myfileOutput);


//write array to csv file
$array = array (
    array('Muneeba', 'Mughal', '252', '4556'),
    array('Ali', 'Khan', '789', '887'),
    array('Aliya', 'Khan', '789', '887')
);

$fp = fopen('file.csv', 'w');

foreach ($array as $val) {
    fputcsv($fp, $val);
}

fclose($fp);
// read from csv
$file = fopen("file.csv", "r");

while (! feof($file)) {
    print_r(fgetcsv($file));
}

fclose($file);

//csv file to 2D array
$twoDarray = array();
if (($handle = fopen("file.csv", "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        $twoDarray[] = $data;
    }
    fclose($handle);
    print_r($twoDarray);
}
