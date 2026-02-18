<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $phrase="hello php";
echo"Longueur:".strlen($phrase)."<br>";
    echo"Majuscule:".Strtoupper($phrase)."<br>";
        echo"Minuscule:".strtolower($phrase)."<br>";

        echo"position de php:".strpos($phrase,"php")."<br>";
    $nouvellePhrase=          
str_replace("php","le monde",$phrase)   ;
      echo"Remplace:".$nouvellePhrase."<br>";

        $liste="Html,css,javascript,php";
      $techs=explode(",",$liste) ;
        echo"Technologies:".implode("|",$techs);
                 $texte="BONJOUR" ;
 echo"texte nettoye:'" .trim($texte) ."'" ;         

?>

    
</body>
</html>