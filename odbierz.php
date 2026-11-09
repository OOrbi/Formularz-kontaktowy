<?php
// PHP
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imie = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $wiadomosc = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');

    if (!empty($imie)) {
        echo "<h2>Witaj, $imie!</h2>";
        echo "<p>Otrzymaliśmy Twoją wiadomość: <em>$wiadomosc</em></p>";
    } else {
        echo "<p>Błąd: Nie wprowadzono imienia.</p>";
    }
}
?>

