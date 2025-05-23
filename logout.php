<?php
session_start();
session_destroy();
echo "<p>Sie wurden ausgeloggt.</p>";
echo '<a href="login.html">Zurück zum Login</a>';
?>
