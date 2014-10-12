<?php

run();

function run(){

ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/

/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
// $url = 'https://api.twitter.com/1.1/blocks/create.json';
// $requestMethod = 'POST';

/** POST fields required by the URL above. See relevant docs as above **/
// $postfields = array(
//     'screen_name' => 'usernameToBlock', 
//     'skip_status' => '1'
// );

/** Perform a POST request and echo the response **/
// $twitter = new TwitterAPIExchange($settings);
// echo $twitter->buildOauth($url, $requestMethod)
//              ->setPostfields($postfields)
//              ->performRequest();

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/


class Rusuainlove {
  public static $settings = array(
    'oauth_access_token' => "2821624852-qwHwkXJkjFnclDEb6aiaXjMKZWulXOHGppvByVB",
    'oauth_access_token_secret' => "uYZKjR66mVLdPqNtSY3qgIaEFEGvs8Y5tMfQUdjlxhmSD",
    'consumer_key' => "pBTiT1uuwCIjyAP9mCH3ad3lu",
    'consumer_secret' => "lMYJA2nks0adTMrJQAhlUtyvdc8tNzO9MdzihYDozKPO8FaUnv"
  );

  public static $limit_no_of_hashtag_users = 1;
  public static $limit_no_of_followers = 1;
  public static $limit_no_of_friends = 1;


  public static function search_hashtag(){
    $url = 'https://api.twitter.com/1.1/search/tweets.json';
    $getfield = "?q=#donetsk&count=".self::$limit_no_of_hashtag_users; //barcamphh hackzurich
    $requestMethod = 'GET';
    $twitter = new TwitterAPIExchange(self::$settings);
    $json_string = $twitter->setGetfield($getfield)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest();

    $parsed_json = json_decode($json_string);
    return $parsed_json->statuses;
  }

  public static function get_location_of_found_hashtag_user($user_data){
    return $user_data->{'user'}->{'location'};
  }

  public static function get_name_of_found_hashtag_user($user_data){
    return $user_data->{'user'}->{'screen_name'};
  }

  public static function get_country_and_coordinates_of_user($location){

  	if (isset($location)) {
  		$url = 'https://api.twitter.com/1.1/geo/search.json';
	    $getfield = "?query=".urlencode($location);
	    $requestMethod = 'GET';
	    $twitter = new TwitterAPIExchange(self::$settings);
	    $json_string = $twitter->setGetfield($getfield)
	                 ->buildOauth($url, $requestMethod)
	                 ->performRequest();

	    $parsed_json = json_decode($json_string);
	    if (isset($parsed_json->result) && isset($parsed_json->result->places) && isset($parsed_json->result->places[0])) {
	    	$country = $parsed_json->result->places[0]->country;
			$coordinates = $parsed_json->{'result'}->{'places'}[0]->{'bounding_box'}->{'coordinates'}[0][0];
      $coordinates = "$coordinates[1], $coordinates[0]";

			$output_array = array();

	      	$output_array["country"] = $country;
	      	$output_array["coordinates"] = $coordinates;
	      	return $output_array;

		} else {
			return null;
		}
	    // echo ("<pre>".print_r($parsed_json,true)."</pre>");
  	} else { return null; }

  }

  public static function get_followers($user_name){
    $url = 'https://api.twitter.com/1.1/followers/list.json';
    $getfield = "?cursor=-1&screen_name=$user_name&count=".self::$limit_no_of_followers;
    $requestMethod = 'GET';
    $twitter = new TwitterAPIExchange(self::$settings);
    $json_string = $twitter->setGetfield($getfield)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest();

    $parsed_json = json_decode($json_string, true);
	return self::process_user_data($parsed_json["users"]);
  }


  public static function get_friends($user_name){
    $url = 'https://api.twitter.com/1.1/friends/list.json';
    $getfield = "?cursor=-1&screen_name=$user_name&count=".self::$limit_no_of_friends;
    $requestMethod = 'GET';
    $twitter = new TwitterAPIExchange(self::$settings);
    $json_string = $twitter->setGetfield($getfield)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest();

    $parsed_json = json_decode($json_string, true);
    return self::process_user_data($parsed_json["users"]);
  }

  public static function process_user_data($user_data) {
  	$len = count($user_data);
    $output_array = array();
    $counter = 0;
    for($i=0; $i<$len; $i++){
	    if (!isset($user_data[$i]["location"]) || empty($user_data[$i]["location"])) {
    		continue; 
	    }
	  	
	  	$user_geo = self::get_country_and_coordinates_of_user($user_data[$i]["location"]);

	  	if (!isset($user_geo["country"]) || empty($user_geo["country"]) || !isset($user_geo["coordinates"]) || empty($user_geo["coordinates"])) {
			continue;
		}

	  	$output_array[$counter]["screen_name"] = $user_data[$i]["screen_name"];
	  	$output_array[$counter]["country"] = $user_geo["country"];
	  	$output_array[$counter]["coordinates"] = $user_geo["coordinates"];
	  	$counter++;
    }
    return $output_array;
  }

}
echo "Beginning of Data. <br/>";

$hashtag_users = Rusuainlove::search_hashtag();

$len = count($hashtag_users);
for($i=0; $i<$len; $i++) {

	$hashtag_user_name = Rusuainlove::get_name_of_found_hashtag_user($hashtag_users[$i]);
	$hashtag_user_location_string = Rusuainlove::get_location_of_found_hashtag_user($hashtag_users[$i]);

	if (!isset($hashtag_user_location_string) || empty($hashtag_user_location_string)) {
		continue;
	}	

	$user_geo = Rusuainlove::get_country_and_coordinates_of_user($hashtag_user_location_string);
	$followers_of_user = Rusuainlove::get_followers($hashtag_user_name);
	$friends_of_user = Rusuainlove::get_friends($hashtag_user_name);

	$user = array();
    $user["screen_name"] = $hashtag_user_name;
	$user["country"] = $user_geo["country"];
  	$user["coordinates"] = $user_geo["coordinates"];

  	if (!isset($user["country"]) || empty($user["country"]) || !isset($user["coordinates"]) || empty($user["coordinates"])) {
		continue;
	}

	echo "<br/>";
	echo "USER NUMBER: ".($i+1);	
	echo "<br/>";
	echo ("<pre>".print_r($user,true)."</pre>");
	echo "<br/>";
	echo "Follower: ";
	echo "<br/>";
	echo ("<pre>".print_r($followers_of_user,true)."</pre>");
	echo "Friends (is following): ";
	echo "<br/>";
	echo ("<pre>".print_r($friends_of_user,true)."</pre>");
}

echo "End of Data.";

if(!empty($followers_of_user) || !empty($friends_of_user)){
  $followers = array_merge($followers_of_user, $friends_of_user);
  if(empty($followers)){
    sleep(60);
  }
}else{
  sleep(60);
}

require_once '../lib/medoo.min.php';
$database = new medoo();

// check if main-user is already inside db
$unwanted_main_user = $database->get("user", "id", [
  "twitter_name" => $user["screen_name"]
]);

// var_dump($unwanted_main_user);
if(!$unwanted_main_user){
  // insert main-user
  $database->insert("user", [
    "twitter_name" => $user["screen_name"],
    "country" => $user["country"],
    "coordinates" => $user["coordinates"],
  ]);
}

// get main user id
$main_user_id = $database->get("user", "id", [
  "coordinates" => $user["coordinates"]
]);

$len = count($followers);
for($i=0; $i<$len; $i++){

  // ignore inserts with same geolocation
  $unwanted_double_follower_user = $database->get("user", "id", [
    "coordinates" => $followers[$i]["coordinates"]
  ]);
  if($unwanted_double_follower_user){
    continue;
  }

  // check if user is already inside db
  $unwanted_follower_user = $database->get("user", "id", [
    "twitter_name" => $followers[$i]["screen_name"]
  ]);

  if($unwanted_follower_user){
    continue;
  }

  // insert follower-user
  $database->insert("user", [
    "twitter_name" => $followers[$i]["screen_name"],
    "country" => $followers[$i]["country"],
    "coordinates" => $followers[$i]["coordinates"],
  ]);

  // get follower user id
  $follower_user_id = $database->get("user", "id", [
    "twitter_name" => $followers[$i]["screen_name"]
  ]);

  // prevent doubles in user_has_connection
  $unwanted_double_follower_user = $database->get("user_has_connection", "id", [
    "first_fid" => $follower_user_id
  ]);
  $unwanted_double_follower_user_main = $database->get("user_has_connection", "id", [
    "second_fid" => $main_user_id
  ]);
  if($unwanted_double_follower_user == $follower_user_id && $unwanted_double_follower_user_main == $main_user_id){
    continue;
  }
  $unwanted_double_follower_user = $database->get("user_has_connection", "id", [
    "second_fid" => $follower_user_id
  ]);
  $unwanted_double_follower_user_main = $database->get("user_has_connection", "id", [
    "first_fid" => $main_user_id
  ]);
  if($unwanted_double_follower_user == $follower_user_id && $unwanted_double_follower_user_main == $main_user_id){
    continue;
  }

  // insert main-user | follow-user geolocation aid-table
  $database->insert("user_has_connection", [
    "first_fid" => $main_user_id,
    "second_fid" => $follower_user_id
  ]);

}



}

?>