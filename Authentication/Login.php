<?php
 session_start();
 include('../db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login - Agility Star</title>
    <link rel="shortcut icon" href="../Images/Logo.svg" type="image/x-icon">
</head>
<body>
    
    <section class="sign-up">
        <div class="signup-thumb">
            <img src="../Images/login-thumb.png" alt="thumb">
        </div>
        <form action="" method="post" autocomplete="off">
        <div class="signup-form">
            <div class="signup-title">Login</div>
        <div>
            <div class="email"><img class="icon" src="../Images/email-ico.svg" alt=""><input type="email" name="email" id="" placeholder="Email address" class="s-input" required></div><br/>
            <div class="pass"><img class="icon" src="../Images/password-ico.svg" alt=""><input type="password" name="pass" id="" placeholder="Password" class="s-input" required></div>
            <div class="f-pass"><a class="forget" href="#">Forget Password?</a></div>
            
        </div>
        <div class="signup-footer">
            <div class="create-section">
                <label class="policy-accept">
               <input type="checkbox" name="remember" id="chkbox"> Remember me
            </label>
            <a href="../Account/account.php"><input type="submit" value="Login" class="createAcc-btn"></a>
           </div>
           <div class="division">
              <p> OR </p>
              <span></span>
           </div>
            <p><span class="already">&nbsp;&nbsp;&nbsp;&nbsp;Not have account?</span>  &nbsp; <a class="login-btn" href="Sign-up.php">Sign up</a>&nbsp;&nbsp;&nbsp;&rightarrow;</p>
         </div>
         </form>
        </div>
        <img class="top-left" src="../Images/top-left-star.png">
<img class="bottom-right" src="../Images/bottom-right-star.png">


<?php
   if(!empty($_POST['email']) && !empty($_POST['pass']) && isset($_POST['remember']))
   {
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    

    $sql = "SELECT * from user where email='$email' and pass='$pass' limit 1";

    $result = $conn->query($sql);

        if($result->num_rows == 1){

            $data = $result->fetch_assoc();
           
            $_SESSION['email']=$data['email'];
            $_SESSION['firstName']=$data['firstName'];
            $_SESSION['lastName']=$data['lastName'];
            $_SESSION['id']=$data['id'];
            $_SESSION['skill']=$data['skill'];
            header("Location:../Account/account.php");
        }
    else {
             echo "Error: " . $sql . "<br>" . $conn->error;
    }

   }  
?>
    </section>

</body>
</html>