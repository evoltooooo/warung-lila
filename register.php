<?php
include ("conn.php");
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);
  $notelp = mysqli_real_escape_string($conn, $_POST['notelp']);

  $select = "SELECT * FROM tbuser WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0) {
    $error[] = "User already exist";
  } 
  else {
    if($password != $cpassword) {
        $error[] = "Password not matched";
    }
    else {
        $insert = "INSERT INTO tbuser (username,email,password,noTelp,tipeUser) VALUES('$username','$email','$password','$notelp','user')";
        mysqli_query($conn, $insert);
        header('location:login.php');
    }
  }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./src/css/register.css">
</head>
<body>
    <div class="center">
        <h1>Register</h1>
        
        <form method="post" action="">
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
            <div class="txt-field">
                <input type="text" required name="username">
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt-field">
                <input type="text" required name="email">
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt-field">
                <input type="text" required name="password">
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt-field">
                <input type="text" required name="cpassword">
                <span></span>
                <label>Conifrm Password</label>
            </div>
            <div class="txt-field">
                <input type="text" required name="notelp">
                <span></span>
                <label>Nomor Telepon</label>
            </div>
            <input type="submit" value="Register" class="lgnbtn" name="submit">
            <div class="signup-link">
                Already have an account? <a href="login.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html>