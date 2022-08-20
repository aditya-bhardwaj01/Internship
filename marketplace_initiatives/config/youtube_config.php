<?php

define("YOUTUBE_KEY", "AIzaSyCMhtjjaEjIYAx1QC-iHoGxSgIe---42VQ") ;

function getSubscribers($youtube_link) {
    $id = explode("channel/", $youtube_link)[1];

    if (!isset($id[0])) {
        return "Invalid Link" ;
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, "https://www.googleapis.com/youtube/v3/channels?part=statistics&id=$id&key=".YOUTUBE_KEY ."");
    $result = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($result);
    return $result->items[0]->statistics->subscriberCount ;
}

?>