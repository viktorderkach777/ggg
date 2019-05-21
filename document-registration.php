<?php
$error=array();
$file = file_get_contents('https://images.pexels.com/photos/237018/pexels-photo-237018.jpeg?cs=srgb&dl=asphalt-beauty-colorful-237018.jpg&fm=jpg');
    if($_SERVER['REQUEST_METHOD']=="POST") {
        $email = $_POST['txtEmail'];
        if(isset($_POST['txtEmail']) and !empty($_POST['txtEmail'])) {
            $email=$_POST['txtEmail'];
        }
        else
        {
            $error['email']="Field EMAIL is required";
        }
        // if(count($error)==0)
        // {
        //     header("Location: /document-index.php");
        //     exit;
        // }
        if(isset($_FILES['fileInput']))
        {
            $file = fopen($_FILES['fileInput']['tmp_name'], 'r');
            //echo $file;
            // echo '<img src="'.$file.'"/>';
        }
        else
        {
            echo "Image not set";
        }
    }
    // echo '<h1>Post Request SERVER'.$file.'</h1>';
?>


<?php include_once("document-header.php"); ?>


<body>
    <?php include_once("document-navbar.php"); ?>
<div class="container">


    <h1>Registration page</h1>

<form method="post" enctype="multipart/form-data">
    <?php if(count($error)>0) { ?>
        <div class="alert alert-danger" role="alert">
            Data Incorrect
        </div>
    <?php } ?>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" name="txtEmail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="txtPasswprd" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="First">First Name</label>
        <input name="FirstName" type="text" class="form-control" id="First" placeholder="First Name">
    </div>
    <div class="form-group">
        <label for="Second">Second Name</label>
        <input name="SecondName" type="text" class="form-control" id="Second" placeholder="Second Name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Choose photo bellow</label>
        <input name="fileInput" type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</body>
<?php include_once("document-footer.php"); ?>
</html>