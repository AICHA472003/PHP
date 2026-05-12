<?php
session_start();
if(!isset($_session['utilisateur'])){
    header('Location:star.php');
    exit;
    echo "<h1>Bienvenue " . $_SESSION['utilisateur'] . " !</h1>";
echo "<a href='logout.php'>Se déconnecter</a>";
}

?>