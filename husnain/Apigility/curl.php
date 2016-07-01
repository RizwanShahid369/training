<?php
error_reporting(E_ALL);
ini_set("display_errors", 'On');
class TestCurl
{
    public $curl;

    public function __construct()
    {
        echo "Initialized";
        $this->curl = curl_init();
    }

    public function getTeacher()
    {
        curl_setopt_array($this->curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://localhost/apigility/public/teacher/8',
            CURLOPT_USERAGENT => 'testing curl request'
        ));

        $resp = curl_exec($this->curl);
        if (!$resp) {
            die('Error: "' . curl_error($this->curl) . '" - Code: ' . curl_errno($this->curl));
        }
        curl_close($this->curl);
        $res = json_decode($resp);
        echo $res->name . ' ' . $res->designation;
    }

    public function addteacher()
    {

        curl_setopt_array($this->curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://localhost/apigility/public/teacher',
            CURLOPT_USERAGENT => 'testing curl',
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => array(
                "name" => 'hello',
                "designation" => 'teacher'
            )
        ));
        $resp = curl_exec($this->curl);
//        print_r($resp);
        if (!$resp) {
            die('Error: "' . curl_error($this->curl) . '" - Code: ' . curl_errno($this->curl));
        }
        curl_close($this->curl);
    }

    public function updateTeacher()
    {

        curl_setopt_array($this->curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://localhost/apigility/public/teacher/9',
            CURLOPT_USERAGENT => 'testing update',
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => json_encode(array(
                "name" => "husnain",
                "designation" => "zaheer"
            ))
        ));

        $resp = curl_exec($this->curl);
        print_r($resp);
        if (!$resp) {
            die('Error: "' . curl_error($this->curl) . '" - Code: ' . curl_errno($this->curl));
        }
        curl_close($this->curl);


    }

    public function deleteteacher()
    {
        curl_setopt_array($this->curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://localhost/apigility/public/teacher/13',
            CURLOPT_USERAGENT => 'testing delete',
            CURLOPT_CUSTOMREQUEST => 'DELETE'
        ));

        $resp = curl_exec($this->curl);
        print_r($resp);
        if (!$resp) {
            die('Error: "' . curl_error($this->curl) . '" - Code: ' . curl_errno($this->curl));
        }
        curl_close($this->curl);
    }
}
$ob = new TestCurl();
//$ob->getTeacher();

$ob->addteacher();