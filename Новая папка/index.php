<?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$soat = date('H:i', strtotime('5 hour'));
$sana = date('d.m.Y',strtotime('5 hour'));
$input=array("@WebUzTv 📅 $sana ⏰ $soat","");
$rand=array_rand($input);
$bio="$input[$rand]";
$MadelineProto->account->updateProfile(['about'=>$bio]);
header('content-type: image/jpg');
$img = imagecreatefromjpeg('rasm.jpg');
$font = "font/tema.ttf"; 
$white = imagecolorallocate($img, 75, 150, 0);
$time = date("H:i",strtotime("5 hour"));
$kun = date('d.m.Y',strtotime('5 hour'));
$txt = $time;
$x = 155;
$y = 225;
imagettftext($img, 65, 0, $x,$y, $white, $font, $txt);
$txt2 = $kun;
$x2 = 200;
$y2 = 299;
imagettftext($img, 25, 0, $x2,$y2, $white, $font, $txt2);
imagejpeg($img,"goto.jpg");
$MadelineProto->photos->updateProfilePhoto(['file' =>"reouz.jpg"]);
$MadelineProto->photos->uploadProfilePhoto(['file' =>"goto.jpg"]);
unlink("MadelineProto.log");
unlink("session.madeline");
?>