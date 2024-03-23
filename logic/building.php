<?php 

if(isset($_POST['submit'])){
header('content-type:image/jpeg');
define('FOUNDER',"Md Farhan");
$src = $_POST['src_url'];
$src_1 = "../asset/certificate-1.jpg";
$image = imagecreatefromjpeg($src);
$color = imagecolorallocate($image,19,21,22);
$name = $_POST['name'];
$date = $_POST['date'];
$course = $_POST['course'];
$font = "../asset/fonts/Classyvogueregular.ttf";
$founderFont = "../asset/fonts/Aprilliya.ttf";


imagettftext($image,60,0,600,670,$color,$font,$name);
imagettftext($image,50,0,1208,1090,$color,$founderFont,FOUNDER);
imagettftext($image,36,0,90,1090,$color,$font,$date);
imagettftext($image,50,0,540,910,$color,$font,$course);
imagejpeg($image,"../asset/certificate-".$name.".jpg");
imagedestroy($image);
}
else{
    echo "<pre>";
    echo "Cant Load";
     echo "</pre>";
}

// require "ImageDownload.php";
// $image = new ImageDownloader("images/");
// $downloadedImage = $image->getImage("https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png");

?>

