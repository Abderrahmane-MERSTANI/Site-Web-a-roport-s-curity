<?php
session_start();

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=localhost;dbname=aerobadge;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Vérifier que les champs du formulaire sont bien remplis
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Récupération des données du formulaire
    $username = $_POST['username'];
    $mot_de_passe = $_POST['password'];

    // Préparer la requête pour vérifier les identifiants
    $sql = "SELECT * FROM badges WHERE username = ? AND password = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username, $mot_de_passe]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Connexion réussie → On enregistre les infos de l'utilisateur dans la session
        $_SESSION['username'] = $user['username'];
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['prenom'] = $user['prenom'];

        // Redirection vers la page d'accueil
        header("Location: accueil.php");
        exit();
    } else {
        // Identifiants incorrects
        echo "Identifiants incorrects. <br><a href='connexion.html'>Retour</a>";
    }
} else {
    echo "Veuillez remplir tous les champs du formulaire.";
}
?>
