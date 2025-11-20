<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
 <title>Insertion Message</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #eef2f3;
padding: 30px;
}

.container {
background-color: white;
max-width: 600px;
margin: auto;
padding: 20px;
border: 2px solid #3498db;
border-radius: 10px;
box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

h2 {
text-align: center;
color: #2c3e50;
}

.result {
margin-top: 20px;
padding: 15px;
background-color: #f8f9fa;
border: 1px dashed #ccc;
font-size: 16px;
}

.success {
color: green;
}

.error {
color: red;
}

.sql {
padding: 8px;
font-family: monospace;
border-left: 4px solid #3498db;
 margin-top: 10px;
}

.back-link {
display: block;
margin-top: 25px;
text-align: center;
}

.back-link a {
 text-decoration: none;
color: white;
background-color: #3498db;
padding: 10px 20px;
border-radius: 5px;
font-weight: bold;
transition: background-color 0.3s ease;
 }

.back-link a:hover {
 background-color: #2c80b4;
}
</style>
</head>

<body>

<div class="container">
<h2>Insertion d’un message dans le Forum</h2>

<?php
// Connexion à la base de données
$mysqli = new mysqli("localhost", "root", "root", "forum");

// Vérification de la connexion
if ($mysqli->connect_error) {
die("<div class='result error'>❌ Erreur de connexion : " . $mysqli->connect_error . "</div>");
}

// Date du jour
$date_du_jour = date("Y-m-d");

// Message reçu
$msg = $_POST['MSG'] ?? '';

echo "<div class='result'>";
echo "📅 <strong>Date :</strong> " . $date_du_jour . "<br>";
 echo "💬 <strong>Message reçu :</strong> " . htmlspecialchars($msg) . "<br>";

// Modification : Échapper les caractères spéciaux pour éviter les erreurs SQL
$msg_echappe = mysqli_real_escape_string($mysqli, $msg);

// Requête SQL
$sql = "INSERT INTO Messages (MSG, DateMSG) VALUES ('$msg_echappe', '$date_du_jour')";

echo "<div class='sql'>$sql</div>";

if ($mysqli->query($sql)) {
echo "<p class='success'>✅ Message inséré avec succès.</p>";
} else {
echo "<p class='error'>❌ Erreur : " . $mysqli->error . "</p>";
}
echo "</div>";
?>

<div class="back-link">
<a href="HelloMembF.php">← Retour au forum</a>
 </div>
</div>

</body>

</html>