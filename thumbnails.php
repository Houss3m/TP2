<html>
<head><title>grille de thumbnails</title></head>
<style>


.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
}

</style>
<body>
<?php
 error_reporting(-1);
 ini_set('display_errors', 'On');
$width =50;
$type='jpg';
$image="images/test4.jpg";
 $image_exif = exif_read_data($image,0,true);

 $image = exif_thumbnail($image, $width, $height, $type);
 echo '<div class="grid-container">';

 if ($image!=false) {
    echo '<div class="grid-item">';
    
echo "<img width='$width' height='$height'
src='data:image/jpeg;base64,".base64_encode($image)."'>";
} else {
 // no thumbnail available, handle the error here
 echo 'No thumbnail available';
 }
 echo "<div class='d-flex' style='flex-direction:column'>";
 echo "<h3>Image Info</h3>";
 echo "<div>";
     echo "<span style='font-weight: bold'>Name: </span>";
     echo "<span>".$image_exif['FILE']['FileName']."</span>";
 echo "</div>";
 echo "<div>";
     echo "<span style='font-weight: bold'>Dimensions: </span>";
     echo "<span>".$image_exif['COMPUTED']['Width']."x".$image_exif['COMPUTED']['Height']."</span>";
 echo "</div>";
 echo "<div>";
     echo "<span style='font-weight: bold'>Type: </span>";
     echo "<span>".$image_exif['FILE']['MimeType']."</span>";
 echo "</div>";
 echo "<div>";
     echo "<span style='font-weight: bold'>Size: </span>";
     echo "<span>".$image_exif['FILE']['FileSize']."ko</span>";
 echo "</div>";
echo "</div>";
echo '</div>';


//2eme image
$image="images/test2.jpg";
 $image_exif = exif_read_data($image,0,true);

 $image = exif_thumbnail($image, $width, $height, $type);
if ($image!=false) {
    echo '<div class="grid-item">';
    
echo "<img width='$width' height='$height'
src='data:image/jpeg;base64,".base64_encode($image)."'>";
} else {
 // no thumbnail available, handle the error here
 echo 'No thumbnail available';
 }
 echo "<div class='d-flex' style='flex-direction:column'>";
 echo "<h3>Image Info</h3>";
 echo "<div>";
     echo "<span style='font-weight: bold'>Name: </span>";
     echo "<span>".$image_exif['FILE']['FileName']."</span>";
 echo "</div>";
 echo "<div>";
     echo "<span style='font-weight: bold'>Dimensions: </span>";
     echo "<span>".$image_exif['COMPUTED']['Width']."x".$image_exif['COMPUTED']['Height']."</span>";
 echo "</div>";
 echo "<div>";
     echo "<span style='font-weight: bold'>Type: </span>";
     echo "<span>".$image_exif['FILE']['MimeType']."</span>";
 echo "</div>";
 echo "<div>";
     echo "<span style='font-weight: bold'>Size: </span>";
     echo "<span>".$image_exif['FILE']['FileSize']."ko</span>";
 echo "</div>";
echo "</div>";
echo '</div>';



//3eme image

$image="images/test5.jpg";
 $image_exif = exif_read_data($image,0,true);

 $image = exif_thumbnail($image, $width, $height, $type);
if ($image!=false) {
    echo '<div class="grid-item">';
    
echo "<img width='$width' height='$height'
src='data:image/jpeg;base64,".base64_encode($image)."'>";
} else {
 // no thumbnail available, handle the error here
 echo 'No thumbnail available';
 }
 echo "<div class='d-flex' style='flex-direction:column'>";
 echo "<h3>Image Info</h3>";
 echo "<div>";
     echo "<span style='font-weight: bold'>Name: </span>";
     echo "<span>".$image_exif['FILE']['FileName']."</span>";
 echo "</div>";
 echo "<div>";
     echo "<span style='font-weight: bold'>Dimensions: </span>";
     echo "<span>".$image_exif['COMPUTED']['Width']."x".$image_exif['COMPUTED']['Height']."</span>";
 echo "</div>";
 echo "<div>";
     echo "<span style='font-weight: bold'>Type: </span>";
     echo "<span>".$image_exif['FILE']['MimeType']."</span>";
 echo "</div>";
 echo "<div>";
     echo "<span style='font-weight: bold'>Size: </span>";
     echo "<span>".$image_exif['FILE']['FileSize']."ko</span>";
 echo "</div>";
echo "</div>";
echo '</div>';
//fin de notre grille..
echo '</div>';



?>
</body>
</html>