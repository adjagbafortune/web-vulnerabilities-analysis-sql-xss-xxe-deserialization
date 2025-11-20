<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<title>Forum Sécurité Informatique</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f0f2f5;
padding: 20px;
}

h2 {
color: #2c3e50;
text-align: center;
}

table {
width: 100%;
border-collapse: collapse;
background-color: #fff;
margin-top: 20px;
}

td {
border: 2px solid #3498db;
padding: 10px;
}

td b {
color: #e74c3c;
}

tr:nth-child(even) {
background-color: #ecf0f1;
}
</style>
</head>

<body>

<h2>Forum Sécurité Informatique</h2>

<?php
$mysqli = new mysqli("localhost", "root", "root", "forum");

// Connexion échouée ?
if ($mysqli->connect_error) {
die("Erreur de connexion : " . $mysqli->connect_error);
}

echo "<table>";

$sql = "SELECT * FROM Messages";
$result = $mysqli->query($sql);

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
echo "<tr><td>";
echo "Posté le : <b>" . $row['DateMSG'] . "</b><br>";

// Ligne modifiée pour éviter l'exécution de code XSS
echo htmlspecialchars($row['MSG']) . "<br>";

echo "</td></tr>";
}

echo "</table>";

$mysqli->close();
?>

</body>

</html>