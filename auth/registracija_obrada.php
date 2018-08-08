<?php
require_once("../funkcije/baza_funkcije.php");
require_once("auth_funkcije.php");
require_once("registracija.php");



$db = connect();



  $msg = "";
  if(isset($_POST["submit"]))
  {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);
    $password = getPasswordHash($password);
    
    
    $sql="SELECT * FROM login WHERE username='$username'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
      $msg = "Sorry...ovaj username već postoji...";
    }
    else
    {
      $query = mysqli_query($db, "INSERT INTO login (username, password)VALUES ('$username', '$password')");
      if($query)
      {
        $msg = "Jupi....Sad ste registrirani.";
      }
    }
  }
?>