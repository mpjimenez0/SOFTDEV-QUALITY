<?php
# An HTTP GET request example
# Deleted the line curl_setopt($ch, CURLOPT_HEADER, true);

$url = 'https://api.built.io/v1/classes/patientlocation/objects';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'application_api_key: blt5ac96291778cf429'
    ));
$data = curl_exec($ch);
curl_close($ch);
var_dump(json_decode($data, true));
?>