<?php
session_start();

$correctUser = 'Test';
$correctPass = 'Tanja';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $correctUser && $password === $correctPass) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        echo "<h2>Willkommen, $username!</h2>";
        echo "<p>Login erfolgreich!</p>";
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo "<h2>Login fehlgeschlagen!</h2>";
        echo "<p>Benutzername oder Passwort falsch.</p>";
        echo '<a href="login.html">Zurück zum Login</a>';
    }
} else {
    header('Location: login.html');
    exit();
}
?>
