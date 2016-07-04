<?php
error_reporting(E_ALL);
ini_set("display_errors", 'On');
class curl
{
//    public $curl;
//    public function __construct()
//    {
//
//    }

    public function addcurlteacher()


    {

        $params = array(
            "Id" => "12", 
            "Courseteach" => "maths",
            "phonenumber" => 32,
            "city" => "lahore",
        );

        $postData = '';

        //create name value pairs seperated by &
        foreach($params as $k => $v)
        {
            $postData .= $k . '='.$v.'&';
        }
        $postData = rtrim($postData, '&');

        $ch = curl_init();
        $url="http://localhost/apigility/public/teacher";
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, count($postData));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

        $output=curl_exec($ch);

        curl_close($ch);
        //echo 'success';
        return $output;

    }

    public function getcurlteacher()
    {
        $ch = curl_init();
        $url='http://localhost/apigility/public/teacher';
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//  curl_setopt($ch,CURLOPT_HEADER, false);

        $output=curl_exec($ch);

        curl_close($ch);
        return $output;
    }


    public function updatecurlteacher()
    {
        $sa=curl_init();
        curl_setopt_array($sa, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://localhost/apigility/public/teacher/4',
            CURLOPT_USERAGENT => 'update',
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => json_encode(array(
                "Courseteach" => "LAHORE"
            ))
        ));
        $resp = curl_exec($sa);
        print_r($resp);
        if (!$resp) {
            die('"' . curl_error($sa) . '"  ' . curl_errno($sa));
        }
        curl_close($sa);
    }
    public function deletecurlteacher()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/apigility/public/teacher/2");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

// execute the request

        $output = curl_exec($ch);

        curl_close($ch);
    }
}
$ob = new curl();
//$ob->getcurlteacher();
//  $ob->deletecurlteacher();
$ob->deletecurlteacher();
$ob->addcurlteacher();


