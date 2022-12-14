<?php

include 'config.php';
session_start();

error_reporting(0);

if (isset($_SESSION["user_id"])) {
  header("Location: ../home/index.php");
}

if (isset($_POST["signup"])) {
  $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
  $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
  $clar=  mysqli_real_escape_string($conn, $_POST["signup_password"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
  $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));

  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email='$email'"));

  if ($password !== $cpassword) {
    echo "<script>alert('Password did not match.');</script>";
  } elseif ($check_email > 0) {
    echo "<script>alert('Email already exists in our database.');</script>";
  } else {
    $sql = "INSERT INTO users (fullname, email, password,clar) VALUES ('$full_name', '$email', '$password','$clar')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $_POST["signup_full_name"] = "";
        $_POST["signup_email"] = "";
        $_POST["signup_password"] = "";
        $_POST["signup_cpassword"] = "";
       
        echo "<script>alert('ai fost inregistrat!')</script>";
    }else{
      echo "<script>alert('eroare')</script>";
    }
      
    
  
  }
}

if (isset($_POST["signin"])) {
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

  $check_email = mysqli_query($conn, "SELECT id,fullname,email,isadmin FROM users WHERE email='$email' AND password='$password'");

  if (mysqli_num_rows($check_email) > 0) {
    $row = mysqli_fetch_assoc($check_email);
    // while($line=mysqli_fetch_array($row)){
    $_SESSION["user_id"] = $row['id'];
    $_SESSION["name"] = $row['fullname'];
    $_SESSION["email"] = $row['email'];
    $isadmin=$row['isadmin'];
    if($isadmin==1){
      header("Location: ../home/admin.php");
    }else if($_SESSION["email"]=='mecanic1@service'||$_SESSION["email"]=='mecanic2@service'||$_SESSION["email"]=='mecanic3@service'){
      header("Location: ../home/mecanic.php");
    }
    else{
        header("Location: ../home/index.php");
    }
  } else {
    echo "<script>alert('Login details is incorrect. Please try again.');</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Service</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="" method="post" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email Address" name="email" autocomplete="off"
                            value="<?php echo $_POST['email']; ?>" required />

                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" autocomplete="off"
                            value="<?php echo $_POST['password']; ?>" required />

                    </div>
                    <input type="submit" value="Login" name="signin" class="btn solid" />
                </form>


                <form action="" class="sign-up-form" method="post">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Full Name" name="signup_full_name" autocomplete="off"
                            value="<?php echo $_POST["signup_full_name"]; ?>" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email Address" name="signup_email" autocomplete="off"
                            value="<?php echo $_POST["signup_email"]; ?>" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="signup_password" autocomplete="off"
                            value="<?php echo $_POST["signup_password"]; ?>" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" name="signup_cpassword" autocomplete="off"
                            value="<?php echo $_POST["signup_cpassword"]; ?>" required />
                    </div>
                    <input type="submit" class="btn" name="signup" value="Sign up" />
                </form>


            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Do not have an account yet? No problem... sign up and create an account!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        SIGN IN and enjoy!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>