<?php
include('./api-service.php');

ini_set('user_agent', "PHP"); // github requires this
$api = 'https://arkilaphilippines.000webhostapp.com/index.php/api/';
$url = $api . 'user/17012801023111629389';
// make the request
$response = file_get_contents($url);
// check we got something back before decoding
if(false !== $response) {
    $gists = json_decode($response, true);
    var_dump($gists);
} // otherwise something went wrong
else{
	echo "error";
}
?>