<?php
    $adminemail="bagger-service@i.ua";
    $site="bagger-service.com.ua";
    $username=$_POST["username"];
    $usertel=$_POST["usertel"]; 
    $useremail=$_POST["useremail"]; 
    $usertext=$_POST["usertext"]; 
    $subject="Клієнт $username скористався контактною формою на сайті $site";
    $charset = "utf-8";
    $headerss ="Content-type: text/html; charset=$charset\r\n";
    $headerss.="MIME-Version: 1.0\r\n";
    $headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
    $msg=" 
    Клієнт $username скористався контактною формою на сайті $site ////
    Ім'я клієнта: $username ////
    Телефон клієнта: $usertel ////
    E-mail: $useremail ////
    Повідомлення: $usertext 
"; 
mail("$adminemail", "$subject", "$msg", $headerss);
header('Location: https://bagger-service.com.ua/index.html');
exit; 
 ?>