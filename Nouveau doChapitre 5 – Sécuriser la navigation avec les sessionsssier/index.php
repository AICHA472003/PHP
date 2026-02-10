<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom'] ?? '';
    $motdepasse = $_POST['motdepasse'] ?? '';

    if ($nom === "admin" && $motdepasse === "1234") {
        session_regenerate_id(true);
        $_SESSION['user'] = $nom;
        header('Location: dashboard.php');
        exit;
    } else {
        $message = "Identifiants incorrects.";
    }
}
?>
<form method="post">
    <label>NOM</label>
    <input type="texte"name=nom>
    <label>pasword</label>
    <input type="password"name="mode de passe">
    <button type="submit">se connecter</button>
</form>
<?php if (!empty($message)) echo "<p style='color:red;'>$message</p>"; 
?>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
echo "<h1>Bienvenue " . $_SESSION['user'] . " !</h1>";
echo "<a href='logout.php'>Se déconnecter</a>";
?>
<?php
session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit;
?>
