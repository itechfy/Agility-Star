<?php

    include ('../Includes/header.php'); 

?>
<!----Main portion---->


<div class="imp-area">
<!----------->
<div class="name-area">
    <p class="hy">Hi&nbsp;<span class="acc-holder-name"><?php echo $_SESSION['firstName']; ?></span><i class="wave-hand"></p>
    <img src="../Images/waving--hand.png" alt="" srcset="" width="80px">
</div>

<!---------->
<div class="acc-box">

           <!------Left area------->
           </form action="" method="post">
           <div class="acc-edit-form">
    <div class="acc-edit-area">
        <div class="upload-dp-box">
            <div class="dp-box">
            <img class="user-dp" src="../Images/dp-thumb.svg" alt="" srcset="">
            </div>
           
            <label for="img-upload">
                <img class="img-up" src="../Images/upload-pic.svg" alt="" srcset="">
            </label>
           
        </div>
         
        <div class="person-name-skill">
         <input type="text" name="PersonName" id="personName" value="<?php echo $_SESSION['firstName']." ".$_SESSION['lastName']; ?>" disabled><span class="edit-name"><img  src="../Images/edit.svg" alt="" srcset=""></span>
            </br><input type="text" name="skill" id="skill" value="<?php  echo $_SESSION['skill'];?>" disabled>
        </div>
        <input type="file" id="img-upload" name="img" accept="image/*">
    </div>
    <!-----Account edit form--------->

</form>
          </div>

    
    <!----Right area------->
    <div class="acc-edit-info">
        <img class="phone" src="../Images/phone.svg" alt="">
        <p class="acc-details">You can add your profile picture, update email, skill and password from here.</p>
        <img class="circle-line" src="../Images/circle-line.svg" alt="">
    </div>
</div>
<!----------->
</div>











<?php

?>

</body>
</html>