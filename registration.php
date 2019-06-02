<?php
require_once 'config.php';
// initializing variables
$username = "";
$email    = "";
$errors = array();
$picture = "uploads/img_avatar1.png";

$target_dir = "uploads/";
$target_file = "";
$uploadOk = 1;
$imageFileType = "";

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);  

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }  
  

if(strlen($_FILES["inputImageUpload"]["tmp_name"]) >0){

  $check = getimagesize($_FILES["inputImageUpload"]["tmp_name"]);
  
  if($check !== false) {
     
      $target_file = $target_dir . basename($_FILES["inputImageUpload"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $uploadOk = 1;
  } else {     
      array_push($errors, "File is not an image");
      $uploadOk = 0;
  }
 
//Check file size
if ($_FILES["inputImageUpload"]["size"] > 500000) {   
    array_push($errors, "Sorry, your file is too large");
    $uploadOk = 0;
}

if ($uploadOk == 0) { 
  array_push($errors, "Your file is not uploaded");
} else {
  if (move_uploaded_file($_FILES["inputImageUpload"]["tmp_name"], $target_file)) {      
      $picture = $target_file;      
  } else {      
      array_push($errors, "Sorry, there was an error uploading your file");
  }
}
}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1); //encrypt the password before saving in the database

    $query = "INSERT INTO users (username, email, password, picture) 
  			  VALUES('$username', '$email', '$password', '$picture')";
    mysqli_query($db, $query);
   
    header('location: login.php');
  }
}
?>

<?php include_once("header.php"); ?>

<?php include_once("navbar.php"); ?>
<form method="post" enctype="multipart/form-data">
<div class="container">
  <div class="row"> 

    <div class="col-6">
      <div class="container">

        <div class="card" style="max-width:400px">
          <img class="card-img-top" id="user-icon" src=<?php echo '"'.$picture.'"' ?> alt="Card image" accept="image/gif, image/jpeg, image/png" style="width:100%">
          <div class="card-body">           
            <button id="linkSelectFile" class="btn btn-primary" name="submit">Upload photo</button>
            <input type="file" id="inputImageUpload" style="display:none" name="inputImageUpload" value="">           
            </form>
          </div>
        </div>
      </div>   

    </div>
    <div class="col-6">

      <h1>Registration page</h1>     

        <?php include('errors.php'); ?>
        <div class="form-group">
          <label for="userName">userName</label>
          <input name="username" type="text" class="form-control" id="userName" placeholder="User Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label for="Password1">Password</label>
          <input type="password" class="form-control" name="password_1" id="Password1" placeholder="Password">
        </div>

        <div class="form-group">
          <label for="Password2">Confirm Password</label>
          <input type="password" class="form-control" name="password_2" id="Password2" placeholder="Confirm Password">
        </div>


        <button type="submit" class="btn btn-primary" name="reg_user">Submit</button>     
     
    </div>
   
  </div>
</div>
</form>

<?php include_once("footer.php"); ?>