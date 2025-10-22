<?php
// Connexion à la base de données
$host = "localhost";
$dbname = "aerobadge";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des données du formulaire
    $newsletter = isset($_POST['newsletter']) ? 1 : 0;

    $stmt = $pdo->prepare("INSERT INTO badges 
        (nom, prenom, email, username, phone, address, birth_date, gender, city, postal_code, country, notification_preferences, credit_card_number, credit_card_expiry, credit_card_cvc, newsletter)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->execute([
        $_POST['name'],
        $_POST['first_name'],
        $_POST['email'],
        $_POST['username'],
        $_POST['phone'],
        $_POST['address'],
        $_POST['birth_date'],
        $_POST['gender'],
        $_POST['city'],
        $_POST['postal_code'],
        $_POST['country'],
        $_POST['notification_preferences'],
        $_POST['credit_card_number'],
        $_POST['credit_card_expiry'],
        $_POST['credit_card_cvc'],
        $newsletter
    ]);

    echo "<h2>Votre badge a été créé avec succès !</h2>";

} catch (PDOException $e) {
    echo "Erreur lors de l'enregistrement : " . $e->getMessage();
}
?>
