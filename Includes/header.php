<?php
 session_start();
 if(empty($_SESSION['id'])){

    header("Location:../Authentication/Login.php");
  //  die("Please <a style='color:purple; text-decoration:underline;' href='../Authentication/Login.php'>Login</a> to continue ");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../JS/app.js" async></script> <!---Prevents Script from loding earlier---->
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" async></script>
    <title>Agility Star</title>
    <link rel="shortcut icon" href="../Images/Logo.svg" type="image/x-icon">
</head>
<body>
    
    <div class="Agility-star">
        <!----Left Section----->
        <div class="menu-bar-section">
           <div class="logo-area">
               <img src="../Images/Logo.svg" width="15px">
               <span class="logo-name">Agility Star</span>
           </div>
           <div class="menu-list">
              <div class="list">
              <!--------Full opacity class for active link will be added here---------->
                  <a href="../Account/account.php" class="half-opacity"><div class="icons"><img src="../Images/account-ico.svg" width="10px" alt="" srcset=""></div> <span class="list-name"> Account</span></a>
                 
                </div>
              <div class="list">
                  <a href="#" class="half-opacity"><div class="icons" ><img src="../Images/teams-ico.svg" alt="" width="15px" srcset=""></div> <span class="list-name"> Teams</span></a>
              </div>
              <div class="list">
                  <a href="#" class="half-opacity"><div class="icons"><img src="../Images/projects-ico.svg" alt="" width="13px" srcset=""></div> <span class="list-name"> Projects</span></a>
              </div>
              <div class="list">
                  <a href="#" class="half-opacity"><div class="icons"><img src="../Images/msg-ico.svg" alt="" width="18px" srcset=""></div> <span class="list-name"> Messaging</span></a>
              </div>
           </div>
           <div class="logout-section">
              <div class="btn-outline"> <a href="../logout.php"><button class="logout-btn">Logout 
                  <span class="logout-arrow">
                    <svg width="22" height="8" viewBox="0 0 32 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.3431 0.92888L31.7071 7.29284C32.0976 7.68336 32.0976 8.31653 31.7071 8.70705L25.3431 15.071C24.9526 15.4615 24.3195 15.4615 23.9289 15.071C23.5384 14.6805 23.5384 14.0473 23.9289 13.6568L28.5858 8.99995H0V6.99995H28.5858L23.9289 2.34309C23.5384 1.95257 23.5384 1.3194 23.9289 0.92888C24.3195 0.538355 24.9526 0.538355 25.3431 0.92888Z" fill="#C08DF8"/>
                        </svg>
                        
                    </span>
              </button>
              </a>
              </div>
           </div>
        </div>
        <!----Right Section--->
        <div class="main-area">
            <div class="search-area">
              
              <div class="menu-title">
                  Account
              </div>

              <div class="search-team">
            
              <div class="search-box" id="search-box">
                    <img src="../Images/search-ico.svg" alt="" width="15px" srcset="" class="search-icon">
                 <input type="search" name="search" autocomplete="off" id="search-area" placeholder="Join team by email">
                 <button class="add-search-team-btn">+</button>
              
                </div>

                <div class="notification">
              <label for="noti-check"> <img src="../Images/noti-ico.svg" alt="notification-icon" width="15px" srcset=""></label>
                </div>
                
                <a href="../Account/account.php">
                <div class="profile-thumb">
                    <img src="../Images/dp-thumb.svg" alt="">
                </div>
                </a>

            </div>
            <input type="checkbox" name="" id="noti-check">
            <!-----Notification------>
            <div class="Notification">
                <div class="corner"></div>
            <p class="noti-title">
            Notifications
            </p>
            <div class="noti-stack">
            <!------Different types of notifications here--------->
             
            <a href="#">
              <div class="request">
              <div class="profile-thumb noti-profile-thumb">
                    <img src="../Images/man.png" alt="">
                </div>
                <div class="req-info">
                    
                    <p><b>John</b> wants to join your team known as Softpedia</p>
                </div>
              </div>
            </a>
             <!------------->
             <a href="#">
              <div class="request">
              <div class="noti-profile-thumb req-bundle">
                    <img src="../Images/friend-req-ico.svg" alt="">
                </div>
                <div class="req-info">
                    
                    <p>You have new friend requests in Softpedia</p>
                </div>
              </div>
            </a>
             <!------------->
             
            </div>
            </div>
        </div>