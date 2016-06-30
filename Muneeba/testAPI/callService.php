<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/30/16
 * Time: 10:06 AM
 */
error_reporting(E_ALL);
ini_set("display_errors", 'On');

function getActor()
{
    //geta an actor
    echo "Calling Service";
    $url = 'http://localhost/zf/public/actor/32';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($data);

    echo $data->actor_id . " " . $data->first_name . " " . $data->last_name . ' ' . $data->last_update;

}

function addActor()
{
    //add an aactor
    $url = 'http://localhost/zf/public/actor';
    $ch1 = curl_init($url);
    $fname= "John";
    $lname = "Doe";
    $fields = [
        'first_name' => "John",
        'last_name' => "Doe",
    ];

    $fields_string = "first_name=" . $fname . "&last_name=" . $lname;

    //var_dump($fields_string);
    curl_setopt($ch1, CURLOPT_URL,$url);
    curl_setopt($ch1,CURLOPT_HEADER, false);
    curl_setopt($ch1, CURLOPT_POST, sizeof($fields));
    curl_setopt($ch1, CURLOPT_POSTFIELDS, $fields);

    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec ($ch1);
    //var_dump($server_output);
    curl_close($ch1);
}

function deleteActor()
{
    //geta an actor
    echo "Calling Service";
    $url = 'http://localhost/zf/public/actor/32';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    $result = curl_exec($ch);
    $result = json_decode($result);
    var_dump($result);
    curl_close($ch);

}


function editActor()
{
    //add an aactor
    $url = 'http://localhost/zf/public/actor/231';
    $fname= "Tim";
    $lname = "Burton";
    $fields = [
        'first_name' => "Tim",
        'last_name' => "Burton",
    ];

    $fields_string = "first_name=" . $fname . "&last_name=" . $lname;

    $ch = curl_init($url);
    //var_dump($fields_string);
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json'
    ));


    $server_output = curl_exec ($ch);
    $error = curl_error($ch);
    var_dump($error);
    var_dump($server_output);
    curl_close($ch);
}
editActor();