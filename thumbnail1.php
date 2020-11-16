<html>
<head><title>thumbnail</title></head>

<body>
<?php
 error_reporting(-1);
 ini_set('display_errors', 'On');
$width =50;
$type='jpg';
$image="images/test4.jpg";
 $image_exif = exif_read_data($image,0,true);

 $image = exif_thumbnail($image, $width, $height, $type);


 if ($image!=false) {

    
echo "<img width='$width' height='$height'
src='data:image/jpeg;base64,".base64_encode($image)."'>";
} else {
 // no thumbnail available, handle the error here
 echo 'No thumbnail available';
 }


?>
</body>
</html>