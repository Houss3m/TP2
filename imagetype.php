 <?php
 $image = "images/test1.jpg";
 $types = array(
 1 => "GIF",
 2 => "JPEG",
 3 => "PNG",
 4 => "SWF",
 5 => "PSD",
 6 => "BMP",
 7 => "TIFF",
 8 => "TIFF"
 );

 $imagetype = exif_imagetype($image);

 if (array_key_exists($imagetype, $types)) {
 echo "Image type is: " . $types[$imagetype];
 } else {
 echo "Not a valid image type";
 }
