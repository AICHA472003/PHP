<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label>nom</label>
    <input type="texte" name="nom" value="<?= htmlspecialchars($nom) ?>">
                            <br>
    <button type="submit">envoyer</button>
                  </form>
           <?php
$erreur=[];
$nom=$email='';
 if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
 }
if(empty($nom)){
    $erreur[]="le nom est obligatoire.";
}
if(empty($email)){
    $erreur[]="le nom est obligatoire.";
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $erreur[]="le nom est obligatoire.";

} 
if(empty($erreurs)){
    echo "<p style='color:green;'>Formulaire envoyé avec succès !</p>";

}

    ?>
</body>
</html>