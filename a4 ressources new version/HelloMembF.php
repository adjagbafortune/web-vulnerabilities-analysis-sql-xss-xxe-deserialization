<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Forum</title>
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

    ul {
        list-style-type: none;
        padding: 0;
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        border: 2px solid #3498db;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    li {
        padding: 20px;
        border-bottom: 2px solid #3498db;
    }

    li:last-child {
        border-bottom: none;
    }

    textarea {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    input[type="submit"] {
        background-color: #3498db;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }

    a {
        font-size: 16px;
        color: #2980b9;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <?php
    echo "<h2><b>Bienvenue dans le Forum</b></h2><br>";
    echo "<ul>";

    echo "<li>";
    echo "<strong>Expédier un commentaire</strong>";
    echo "<form method='post' action='Inser-MSGForum.php'>";
    echo "<p><textarea name='MSG' rows='4' cols='50' required></textarea></p>";
    echo "<p><input type='submit' value='Envoyer'></p>";
    echo "</form>";
    echo "</li>";

    echo "<li><a href='./MSGForum.php'>Lire les commentaires</a></li>";

    echo "</ul>";
?>

</body>

</html>