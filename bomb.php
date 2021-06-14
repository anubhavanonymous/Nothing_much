<?php

$url = "https://api.bimaplan.co/lead-sessions";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Host: api.bimaplan.co",
   "Connection: keep-alive",
   "Content-Length: 142",
   "Accept: application/json, text/plain, */*",
   "Origin: https://bimaplan.co",
   "User-Agent: Mozilla/5.0 (Linux; Android 9; Redmi 6 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.136 Mobile Safari/537.36",
   "Content-Type: application/json",
   "Referer: https://bimaplan.co/lead/sign-up",
   "Accept-Encoding: gzip, deflate, br",
   "Accept-Language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"mobile":"7970933131","createdBy":null,"source":"Website","utm_medium":null,"utm_campaign":null,"partnerId":null,"name":"Jsisjwgw sjusgsgsg"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

