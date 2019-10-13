<?php

$a = 1;

function left($str, $length) {
     return substr($str, 0, $length);
}
 
function right($str, $length) {
     return substr($str, -$length);
}

function display_daily_bing_wallpaper() {
    $bing_daily_image_xml = file_get_contents('http://cn.bing.com/HPImageArchive.aspx?idx=0&n=1');
    preg_match("/<urlBase>(.+?)<\/urlBase>/ies", $bing_daily_image_xml, $matches);
    $bing_daily_img_url= 'https://s.cn.bing.com' . $matches[1] . '_1920x1080.jpg';
    echo "<img src='". $bing_daily_img_url. "'>";
}

?>
