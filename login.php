<?php
include ("conn.php");

session_start();

if(isset($_POST['submit'])){
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = md5($_POST['password']);

  $select = "SELECT * FROM tbuser WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    if($row['tipeUser'] == 'admin'){
        $_SESSION['admin_name'] = $row['username'];
        header('location:adminpage.php');
    }
    elseif($row['tipeUser'] == 'user') {
        $_SESSION['user_name'] = $row['username'];
        header('location:userpage.php');
    }
  }
  else {
    $error[] = 'Incorrect email or password'; 
  } 
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./src/css/login.css">
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post" action="">
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
            <div class="txt-field">
                <input type="text" required name="email">
                <span></span>
                <label>Email</label>
            </div><div class="txt-field">
                <input type="text" required name="password">
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login" class="lgnbtn" name="submit">
            <div class="signup-link">
                Have no account? <a href="register.php">Register</a>
            </div>
        </form>
    </div>
</body>
</html>