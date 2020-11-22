<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$time=date("H:i",strtotime("5 hour"));
$kun=date("d-m-20y",strtotime("5 hour"));
 $nik = ["ELBEK", "GULOMOV"];
  $nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt | $time",'about'=>"📆$kun | ⏰$time"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);
$yil = date("Y", strtotime("5 hour"));
$sana = date("d/m/Y", strtotime("5 hour"));

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm.jpg');
$font = "font/neon.otf"; 
$white = imagecolorallocate($img, 255, 255, 255);
$time = date("H:i",strtotime("5 hour"));
$txt = $time;
$x = 160;
$y = 350;
imagettftext($img,100, 0, $x,$y, $white, $font, $txt);
imagejpeg($img,"goto.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm2.jpg');
$font = "font/neon.otf"; 
$white = imagecolorallocate($img, 255, 255, 255);
$time = date("H:i",strtotime("5 hour"));
$txt = $time;
$x = 160;
$y = 350;
imagettftext($img, 100, 0, $x,$y, $white, $font, $txt);
imagejpeg($img,"goto2.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm3.jpg');
$font = "font/neon.otf"; 
$white = imagecolorallocate($img, 255, 255, 255);
$time = date("H:i",strtotime("5 hour"));
$txt = $time;
$x = 160;
$y = 350;
imagettftext($img, 100, 0, $x,$y, $white, $font, $txt);
imagejpeg($img,"goto3.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm4.jpg');
$font = "font/neon.otf"; 
$white = imagecolorallocate($img, 255, 255, 255);
$time = date("H:i",strtotime("5 hour"));
$txt = $time;
$x = 160;
$y = 350;
imagettftext($img, 100, 0, $x,$y, $white, $font, $txt);
imagejpeg($img,"goto4.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm5.jpg');
$font = "font/neon.otf"; 
$white = imagecolorallocate($img, 255, 255, 255);
$time = date("H:i",strtotime("5 hour"));
$txt = $time;
$x = 160;
$y = 350;
imagettftext($img, 100, 0, $x,$y, $white, $font, $txt);
imagejpeg($img,"goto5.jpg");

header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm6.jpg');
$font = "font/neon.otf"; 
$white = imagecolorallocate($img, 255, 255, 255);
$time = date("H:i",strtotime("5 hour"));
$txt = $time;
$x = 160;
$y = 350;
imagettftext($img, 100, 0, $x,$y, $white, $font, $txt);
imagejpeg($img,"goto6.jpg");

$logo = ["goto.jpg", "goto2.jpg", "goto3.jpg", "goto4.jpg", "goto5.jpg", "goto6.jpg"];
$logorand=array_rand($logo);
  $logopic="$logo[$logorand]";

if($yil == "2020"){
header('Content-type: image/jpg');
file_get_contents($logopic);
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);
}
$MadelineProto->photos->updateProfilePhoto(['file' => "$logopic" ]);


?>