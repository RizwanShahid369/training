<?php

error_reporting(E_ALL);
ini_set('display_errors', True);

function Get($url)
{
    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false);

    $output=curl_exec($ch);

    curl_close($ch);
    return $output;
}

function Post()
{
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://localhost/apigility/public/students',
        CURLOPT_USERAGENT => 'Codular Sample cURL Request',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => array(
            "name" => 'api',
            "dob" => '32',
            "Father_Name" => 'gility',
            "class"=>'12',
            "address"=>'e',
            "city"=>'c',
            "school"=>'s'
        )
    ));
$resp = curl_exec($curl);
    curl_close($curl);

}
function PUT($url, $data_string)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
    );

    $result = curl_exec($ch);
    return $result;
}

function delete($url, $data_string){

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost/apigility/public/students/54");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_exec($ch);

    curl_close($ch);
}

$data_string = '{"name" : "UP",
            "dob" : "32",
            "Father_Name" : "gility",
            "class":"12",
            "address":"e",
            "city":"c",
            "school":"s"}';
echo Get("http://localhost/apigility/public/students/54");
Post();
PUT("http://localhost/apigility/public/students/59",$data_string);
delete("http://localhost/apigility/public/students/59", $data_string)
?>