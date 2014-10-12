<?php 

$testdata = array();

$user1 = array("screen_name" => "russian_guy1", "country" => "Russia", "coordinates" => "55.751484,37.620457");
$follower1 = array(0 => array("ukrainian_girl32" => "Orange", "country" => "Ukraine", "coordinates" => "48.006778,37.811872"), 1 => array("screen_name" => "ukrainian_guy234435", "country" => "Ukraine", "coordinates" => "50.432315,30.534621"));

$user2 = array("screen_name" => "russian_girl435", "country" => "Russia", "coordinates" => "56.833444,60.626885");
$follower2 = array(0 => array("screen_name" => "russian_guy1", "country" => "Russia", "coordinates" => "55.751484,37.620457"), 1 => array("screen_name" => "russian_guy1", "country" => "Russia", "coordinates" => "55.751484,37.620457"));

$user3 = array("screen_name" => "russain_guy2343234234", "country" => "Russia", "coordinates" => "59.919499,30.344164");
$follower3 = array(0 => array("screen_name" => "ukrainian_guy233333", "country" => "Ukraine", "coordinates" => "48.453907, 35.096309"), 1 => array("screen_name" => "sdjvndfovasg", "country" => "Russia", "coordinates" => "55.751484,37.620457"));

$user4 = array("screen_name" => "ukrainian_guy233333", "country" => "Ukraine", "coordinates" => "48.453907, 35.096309");
$follower4 = array(0 => array("screen_name" => "russian_girl435", "country" => "Russia", "coordinates" => "56.833444,60.626885"), 1 => array("screen_name" => "russain_guy2343234234", "country" => "Russia", "coordinates" => "59.919499,30.344164"));

$testdata[0] = array("user" => $user1, "followers" => $follower1);
$testdata[1] = array("user" => $user2, "followers" => $follower2);
$testdata[2] = array("user" => $user3, "followers" => $follower3);
$testdata[3] = array("user" => $user4, "followers" => $follower4);


// echo ("<pre>".print_r($testdata,true)."</pre>");

?>