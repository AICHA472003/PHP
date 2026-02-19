<?php
session_start();
 if(!isset($_SESSION["user"])){
 header("location:Login.php");
    exit();

 }
        $user=$_SESSION["user"];
   echo"Bienvenu".$_user["role"]."".$user["Name"];

         ?>
   <br><br>
   <a href="logout.php" > sign out</a>   
