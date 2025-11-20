
<?php
if (isset($_POST['Login']) && isset($_POST['MotPasse'])) {

    // Connexion à la base de données
$connect = mysqli_connect('localhost', 'root', 'root', 'forum');

if (!$connect) {
die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}
$login = $_POST['Login'];
$motPasse = $_POST['MotPasse'];

// **CODE VULNÉRABLE REMPLACÉ PAR LA REQUÊTE PRÉPARÉE**

// 1. Préparation de la requête
$stmt = mysqli_prepare($connect, "SELECT Login, MotPasse FROM membres WHERE Login = ? AND MotPasse = ?");

// 2. Liaison des paramètres
// "ss" indique que les deux paramètres sont des chaînes de caractères (strings)
mysqli_stmt_bind_param($stmt, "ss", $login, $motPasse);

// 3. Exécution de la requête
mysqli_stmt_execute($stmt);

// 4. Récupération du résultat
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
// Connexion réussie
header("Location: ./HelloMembF.php");
exit();
} else {
// Échec de connexion
echo "Saisir un identifiant ou un mot de passe correct.";
 }

// Fermer la requête et la connexion
mysqli_stmt_close($stmt);
mysqli_close($connect);

} else {
echo "Les variables du formulaire ne sont pas déclarées.";
}
?>