<?php

require_once "connection.php";

$key = "hZGisJDX3SCD60TeiUU0WefjD";
$secret = "pEAqxDM5LtqYdwP2HoiLzsaRinEcESBXAyyty8vdLM6ZGzR5EV";
$token = "AAAAAAAAAAAAAAAAAAAAAH12awEAAAAAqXERlLD1vsEPIa%2Bhwz6g%2FRfhyfA%3DKdtFBaCBZ4xU3SCYul9ESZXHdpe4KgweS4QnkWlOvtXNKUlkPg";
$client_id = "WkJJQmx2c3pFcUp3WU1EUkQ2ci06MTpjaQ";
$client_secret = "ya5Z_xsuGIAhrhhdVmYMIH4xHEYjW2Ic_VhylU-hHjAbKGwq3z";

function getFollowers($username)
{
    global $token;
    $headers = 'Authorization: Bearer ' . $token;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $headers));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, "https://api.twitter.com/2/users/by/username/".$username."?user.fields=public_metrics");
    $result = curl_exec($ch);
    curl_close($ch);
    if (is_string($result)) {
        return (json_decode($result)->data->public_metrics->followers_count);
    }

    return "Invalid Username" ;
}
