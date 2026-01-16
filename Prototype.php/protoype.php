
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP</title>
</head>
       <body>

<h2>Calculatrice</h2>

<?php
// Initialisation
$resultat = "";
$erreur = "";

// Fonction de calcul
function calculer($a, $b, $op) {
    switch ($op) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "Erreur : division par zéro";
            }
            return $a / $b;
        default:
            return "Opération invalide";
    }
}

// Traitement du formulaire
if (isset($_POST['calculer'])) {

    $n1 = $_POST['nombre1'];
    $n2 = $_POST['nombre2'];
    $operation = $_POST['operation'];

    // Validation
    if ($n1 === "" || $n2 === "") {
        $erreur = "⚠️ Tous les champs sont obligatoires.";
    } elseif (!is_numeric($n1) || !is_numeric($n2)) {
        $erreur = "⚠️ Veuillez saisir des nombres valides.";
    } else {
        $resultat = calculer($n1, $n2, $operation);
    }
}
?>

<form method="post">
    Nombre 1 :
    <input type="text" name="nombre1"><br><br>

    Nombre 2 :
    <input type="text" name="nombre2"><br><br>

    Opération :
    <select name="operation">
        <option value="+">Addition (+)</option>
        <option value="-">Soustraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select><br><br>

    <input type="submit" name="calculer" value="Calculer"><br><br>

    Résultat :
    <input type="text" value="<?php echo $resultat; ?>" readonly>
</form>

<?php
if ($erreur != "") {
    echo "<p style='color:red;'>$erreur</p>";
}
?>

</body>
</html>



?>