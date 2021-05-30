<?php
   include('../db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" async></script>
    <title>Sign up - Agility Star</title>
    <link rel="shortcut icon" href="../Images/Logo.svg" type="image/x-icon">
</head>
<body>
    
    <section class="sign-up">
        <div class="signup-thumb">
            <img src="../Images/signup-thumb.png" alt="thumb">
        </div>

        <form action="Sign-up.php" method="post">
        <div class="signup-form">
            <div class="signup-title">Sign up</div>
        <div autocomplete="off"> 
            <input type="text" name="first-name" id="" placeholder="First name" class="s-input" required>
            <input type="text" name="last-name" id="" placeholder="Last name" class="s-input" required><br/>
            <input list="countries" name="country" id="" placeholder="Country" class="s-input" required>
            <input type="text" name="skill" id="" placeholder="Main Skill" class="s-input" required> <br/>
            <input type="email" name="email" id="email" placeholder="Email address" class="s-input" required><br/>
            <input type="password" name="pass" id="" placeholder="Password" class="s-input" required>
            <input type="password" name="cnfrm-pass" id="" placeholder="Confirm password" class="s-input" required>
   
        </div>
      
        <div class="signup-footer">
            <div class="create-section">
                <label class="policy-accept">
               <input type="checkbox" name="policy" id="chkbox" required> I accept privacy policy for this form
            </label>
            <input type="submit" value="Create account" class="createAcc-btn">
           </div>
           <div class="division">
              <p> OR </p>
              <span></span>
           </div>
            <p><span class="already">&nbsp;&nbsp;&nbsp;&nbsp;Already have account?</span>  &nbsp; <a class="login-btn" href="Login.php">Login</a>&nbsp;&nbsp;&nbsp;&rightarrow;</p>
         </div>
    
         </form>
        
         <!-------Account already exists container----->
 

        <?php
     
      if(!empty($_POST['first-name'])&&!empty($_POST['last-name'])&&!empty($_POST['country'])&&!empty($_POST['skill'])&&!empty($_POST['email'])&&!empty($_POST['pass'])&&!empty($_POST['cnfrm-pass'])&&isset($_POST['policy']))
      {
         
        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $country = $_POST['country'];
        $skill = $_POST['skill'];
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
       
        $sql1 = "SELECT email from user where email='$email'";
        
        
        if($conn->query($sql1)->num_rows > 0 )
        {
         echo '<script>
                $(".exists").show();
              </script>';

        }
        else{

        $sql = "INSERT INTO user (firstName, lastName, country, skill, email, pass)
                 VALUES ('$firstName', '$lastName', '$country', '$skill', '$email', '$pass')";
        
        if ($conn->query($sql) === TRUE) {
                 

        } 
        else {
                 echo "Error: " . $sql . "<br>" . $conn->error;
        }
               }

        $conn->close();
      }
    
    ?> 
        <datalist id="countries">
          <option value="Pakistan"></option>
          <option value="London"></option>
          <option value="Amsterdam"></option>
          <option value="Los Angeles"></option>
          <option value="Dubai"></option>
          <option value="Saudi Arabia"></option>
        </datalist>
        </div>
        <img class="top-left" src="../Images/top-left-star.png">
<img class="bottom-right" src="../Images/bottom-right-star.png">
    
    
<div class="exists">
          <p>An account with this email already exists</p>    
          <button class="close" onclick="hideBox()">Close</button> 
        </div>
    

    </section>

   <script>
       function hideBox(){
          $(".exists").hide();
       }
       hideBox();
   </script>
  <script>
  </script>
</body>
</html>