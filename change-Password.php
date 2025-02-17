<?php
session_start();
if (isset($_SESSION['Email_Session'])) {
    header("Location: ./index.php");
    die();
}
include('config.php');
$msg = "";
$error = "";
if (isset($_GET['Reset'])) {
    if (mysqli_num_rows(mysqli_query($conx, "SELECT * FROM register WHERE CodeV='{$_GET['Reset']}'")) > 0) {
        if (isset($_POST['submit'])) {
            $Pass = mysqli_real_escape_string($conx, $_POST['Password']);
            $Confirme_Pass = mysqli_real_escape_string($conx, $_POST['Conf-Password']);
            if ($Pass === $Confirme_Pass) {
                $sql = "UPDATE register SET Password ='" . md5($Pass) . "' WHERE CodeV='{$_GET['Reset']}'";
                $result = mysqli_query($conx, $sql);
                if ($result) {
                    header("Location: ./index.php");
                }
            } else {
                $msg = "<div class='alert alert-danger'>Password and Confirm Password is not match</div>";
                $error = 'style="border:1px Solid red;box-shadow:0px 1px 11px 0px red"';
            }
        }
    }
} else {
    header("Location: Forget.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container sign-up-mode">
        <div class="forms-container">
            <div class="signin-signup" style="left: 50%;z-index:99;">
                <form method="POST" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <?php echo $msg ?>

                    <div class="input-field" <?php echo $error ?>>
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" />
                    </div>
                    <div class="input-field" <?php echo $error ?>>
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Conf-Password" placeholder="Confirm Password" />
                    </div>
                    <input type="submit" name="submit" class="btn" value="Save" />
                   
                </form>
            </div>
        </div>

    </div>
</body>

</html>