<?php

//echo "stiglo : ".$_POST['slideRadio']." , ".$_POST['slidePlaceSelect']." ; ";

echo "UPLOADIN IMGS COUNT = ".count($_FILES["images"]["name"]);

for($i=0; $i<count($_FILES["images"]["name"]); $i++) {

$target_dir = "../uploads/";

$target_file = $target_dir . basename($_FILES["images"]["name"][$i]);

echo "TARGET FILE =".$target_file;
echo "<br>";


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["images"]["tmp_name"][$i]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["images"]["size"][$i] > 55500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["images"]["tmp_name"][$i], $target_file)) {
            
            echo "The file ". basename( $_FILES["images"]["name"][$i]). " has been uploaded.";
            echo "<br>";
 /*           
            require_once('../connection.php');
            $target_file = substr($target_file,3);
            $target_file = "app/".$target_file;
            
            switch ($upload_place) {
                
                case 'slide':
                    
                    require_once('../models/slide_image.php');
                    SlideImage::saveSlideImage($target_file, $slide_place);
                    break;
                    
                case 'gallery_head':
                    require_once('../models/gallery_info.php');
                    GalleryInfo::saveGalleryInfo($gallery_name, $target_file, $gallery_description_header, $gallery_description_paragraph);
                    break;
            }
            
  */          
            
            
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
}
    ?>