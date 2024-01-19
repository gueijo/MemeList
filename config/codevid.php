<?php 

include_once("./config/url.php");
include_once("./config/process.php");

function extrairCodigoDoVideo($url) {
    $pattern = '/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';
    
    preg_match($pattern, $url, $matches);
    
    return isset($matches[1]) ? $matches[1] : null;
}

function extrairCodigoDoTikTok($url) {
    $pattern = '/(?:tiktok\.com\/(?:[^\/\n\s]+\/\S+\/|video\/|\S*?[?&]video=))(\d+)/';

    preg_match($pattern, $url, $matches);

    return isset($matches[1]) ? $matches[1] : null;
}

function extrairCodigoDoVideoTwitter($url) {
    $pattern1 = '/twitter\.com\/[^\/\n\s]+\/status\/([0-9]+)/';
    $pattern2 = '/x\.com\/[^\/\n\s]+\/status\/([0-9]+)/';
   

    preg_match($pattern1, $url, $matches1);
    preg_match($pattern2, $url, $matches2);

    if (isset($matches1[1])) {
        return $matches1[1];
    } elseif (isset($matches2[1])) {
        return $matches2[1];
    } else {
        return null;
    }
}



?>