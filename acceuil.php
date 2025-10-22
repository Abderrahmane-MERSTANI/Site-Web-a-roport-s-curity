<?php
session_start();

// Vérification : si l'utilisateur n'est pas connecté, on le renvoie à la page de connexion
if (!isset($_SESSION['username'])) {
    header("Location: connexion.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            color: #00796b;
        }
        a {
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background-color: #00796b;
            padding: 10px 20px;
            border-radius: 5px;
        }
        a:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>

    <h1>Connexion bien faite ✅</h1>
    <p>Bienvenue <?php echo htmlspecialchars($_SESSION['prenom'] . ' ' . $_SESSION['nom']); ?> !</p>

    <a href="logout.php">Se déconnecter</a>

</body>
</html>
