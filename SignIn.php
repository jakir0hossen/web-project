<?php
session_start();
if (isset($_SESSION['Email_Session'])) {
  header("Location: ./index.php");
  die();
}


include('config.php');
$msg = "";
$Error_Pass = "";
if (isset($_GET['Verification'])) {
  $raquet = mysqli_query($conx, "SELECT * FROM register WHERE CodeV='{$_GET['Verification']}'");
  if (mysqli_num_rows($raquet) > 0) {
    $query = mysqli_query($conx, "UPDATE register SET verification='1' WHERE CodeV='{$_GET['Verification']}'");
    if ($query) {
      $rowv = mysqli_fetch_assoc($raquet);
      header("Location: ./index.php?id='{$rowv['id']}'");
    }else{
      header("Location: ./SignIn.php");
    }
  } else {
    header("Location: ./SignIn.php");
  }
}
if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conx, $_POST['email']);
  $Pass = mysqli_real_escape_string($conx, md5($_POST['Password']));
  $sql = "SELECT * FROM register WHERE email='{$email}' and Password='{$Pass}'";
  $resulte = mysqli_query($conx, $sql);
  if (mysqli_num_rows($resulte) === 1) {
    $row = mysqli_fetch_assoc($resulte);
    if ($row['verification'] === '1') {
      $_SESSION['Email_Session']=$email;
      header("Location: ./index.php");
    }else{$msg = "<div class='alert alert-info'>First Verify Your Account</div>";}
  }else{
    $msg = "<div class='alert alert-danger'>Email or Password is not match</div>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/79d1bfb033.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up Form</title>
  
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="POST" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <?php echo $msg ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="Password" placeholder="Password" />
          </div>
          <div class="Forget-Pass">
          <a href="./Forget.php" class="Forget">Forget Password?</a></div>
          <input type="submit" name="submit" value="Login" class="btn solid" />

        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Join LU Magazine</h3>
          <p>
           Sign up today for access to campus news, events, and student stories
          </p>
          <a href="./SignUp.php" class="btn transparent" id="sign-in-btn" style="padding:10px 20px;text-decoration:none">
            Sign up
          </a>
        </div>
        <img src="./images/logo.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>