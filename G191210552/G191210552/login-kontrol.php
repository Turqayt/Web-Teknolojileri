<?php
error_reporting(0);
session_start();

$mail=$_POST["mail"];
$pass=$_POST["pass"];
$kayitlimail="g191210552@sakarya.edu.tr";
$kayitlipass="g191210552";
if(empty($_POST)==false)
{
  $mail=$_POST["mail"];
  $pass=$_POST["pass"];
  $kayitlimail="g191210552@sakarya.edu.tr";
  $kayitlipass="g191210552";



  if($mail==$kayitlimail||$pass==$kayitlipass)
  {
    header("location:basariligiris.html");
  }
  else
  {        
    header("location:login.php");
  };
}


?>
