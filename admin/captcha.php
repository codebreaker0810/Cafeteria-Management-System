<?php
session_start();
$rand_num=rand(11111,99999);
$font='arial.ttf';
$_SESSION['CODE']=$rand_num;
$layer=imagecreatetruecolor(250,60);
$captcha_bg=imagecolorallocate($layer,255,160,120);
imagefill($layer,0,0,$captcha_bg);
$captcha_text_color = imagecolorallocate($layer, 39,55,70);
$font_size = 40;
$img_width = 100;
$img_height = 60;
$captcha_text_color=imagecolorallocate($layer,0,0,0);
imagettftext($layer, $font_size, 0, 75, 44,$captcha_text_color,'You are the one.ttf', $rand_num);
//ImageString($layer,100,100,18,$rand_num,$captcha_text_color);
header('Content-Type:image/jpeg');
imagejpeg($layer);
?>