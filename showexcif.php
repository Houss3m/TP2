 <?php
 error_reporting(-1);
 ini_set('display_errors', 'On');

 echo "<h1>test1.jpg:</h1>";
  $exif = exif_read_data('images/test1.jpg', 'IFD0');
 //$exif = exif_read_data('images/test1.gif', 'IFD0');

 
 echo $exif==false ? "No header data found.<br />\n" : "Image contains
headers<br />\n";

 $exif = exif_read_data('images/test4.jpg', 0,true);
 

 echo "<h1>test4.jpg:</h1>";
 foreach ($exif as $key => $section) {
 foreach ($section as $name => $val) {
 echo "$key.$name: $val<br />\n";
 }
 }

/* DISPLAY IMAGE SIZE */ 
echo "<br/><br/><br/><br/>";
list($width, $height, $type, $attr) = getimagesize('images/test4.jpg');
echo $attr;
echo "<img src=\"images/test4.jpg\" $attr alt=\"Exemple avec getimagesize()\" />";



 ?>
