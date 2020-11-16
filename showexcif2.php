<?php 
        error_reporting(-1); 
        ini_set('display_errors', 'On');

        $img1_path = 'images/roses.jpg';
        $img2_path = 'images/test5.jpg';

        $img1 = exif_read_data($img1_path,0,true);
        $img2 = exif_read_data($img2_path,0,true);
        $ImageDescription=""; 

        echo '<div class="card" >';
            echo "<img src='".$img1_path."' width='50%' height='50%'>";
            echo "<div class='d-flex' style='flex-direction:column;text-align:left'>";
                echo "<span style='font-weight: bold;'>Creation Date: </span><span>".$img1['EXIF']['DateTimeOriginal']."</span>";
                echo "<span style='font-weight: bold;'>Width: </span><span>".$img1['COMPUTED']['Width']."px</span>";
                echo "<span style='font-weight: bold;'>Height: </span><span>".$img1['COMPUTED']['Height']."px</span>";
                if($img1['IFD0']['ImageDescription'] != "")
                echo "<span style='font-weight: bold;'>Image Description: </span><span>".$img1['IFD0']['ImageDescription']."</span>";
                else echo "<span style='font-weight: bold;'>Image Description: </span><span> image dont contain a description</span>";
            echo "</div>";
        echo '</div>';
        echo '<div class="card">';
        echo "<img src='".$img2_path."' width='50%' height='50%'>";
            echo "<div class='d-flex' style='flex-direction:column;text-align:left'>";
                echo "<span style='font-weight: bold;'>Creation Date: </span><span>".$img2['EXIF']['DateTimeOriginal']."</span>";
                echo "<span style='font-weight: bold;'>Width: </span><span>".$img2['COMPUTED']['Width']."px</span>";
                echo "<span style='font-weight: bold;'>Height: </span><span>".$img2['COMPUTED']['Height']."px</span>";
                if($img2['IFD0']['ImageDescription'] != "")
                echo "<span style='font-weight: bold;'>Image Description: </span><span>".$img2['IFD0']['ImageDescription']."</span>";
                else echo "<span style='font-weight: bold;'>Image Description: </span><span> image dont contain a description</span>";
            echo "</div>";

        echo '</div>';
       

    ?>