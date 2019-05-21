<?php
    if($_SERVER['REQUEST_METHOD']=="POST") {
        $email = $_POST['txtEmail'];
        echo '<h1>Post Request SERVER'.$email.'</h1>';
    }
?>


<?php include_once("document-header.php"); ?>


<body>
    <?php include_once("document-navbar.php"); ?>
<div class="container">


    <h1>Login page</h1>

<form method="post">
    
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" class="form-control" name="txtEmail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="txtPasswprd" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</body>
<?php include_once("document-footer.php"); ?>
</html>