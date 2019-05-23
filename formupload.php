<?php
$target_dir = "uploads/";
$target_file = "";
$uploadOk = 1;
$imageFileType = "";
// Check if image file is a actual image or fake image
if(isset($_POST["submit2"])) {
    $check = getimagesize($_FILES["inputImageUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $target_file = $target_dir . basename($_FILES["inputImageUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


    // Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// Check file size
if ($_FILES["inputImageUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}


if ($uploadOk == 0) {
    echo "Your file is not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["inputImageUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". ( $_FILES["inputImageUpload"]["name"]). " has been uploaded.";
        //echo $target_file;
        echo '<img src="'. $target_file .'" alt="Italian Trulli" style="width:400px;height:400px;">';
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


}

// Check if $uploadOk is set to 0 by an error

?>

<!DOCTYPE html>
<html>
<body>

<form  method="post" enctype="multipart/form-data">
    Select image to upload:    
    <input type="file" name="inputImageUpload" id="inputImageUpload">
    <input type="submit" value="Upload Image" name="submit2">
</form>

</body>
</html>