<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous - AéroBadge</title>
    <link rel="stylesheet" href="stage.css">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 15px 40px;
            border-bottom: 1px solid #ddd;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 40px;
            margin-right: 10px;
        }

        .spanheader {
            font-weight: bold;
            font-size: 20px;
            color: #3b82f6;
            text-decoration: none;
        }

        .nav-menu a {
            margin-left: 20px;
            color: #000;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu a:hover {
            color: #2563eb;
        }

        .contact-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .contact-container p {
            text-align: center;
            color: #444;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 15px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #2980b9;
        }

        .footer {
            background-color: #1e293b; /* Couleur sombre */
            color: #cbd5e1;            /* Texte gris clair */
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 40px 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-top: 1px solid #334155;
        }

        .footer .a {
            flex: 1 1 200px;
            margin: 20px;
        }

        .footer h2 {
            color: #ffffff;
            font-size: 1.2em;
            margin-bottom: 15px;
        }

        .footer a {
            display: block;
            color: #cbd5e1;
            text-decoration: none;
            margin-bottom: 8px;
            transition: color 0.3s;
        }

        .footer a:hover {
            color: #60a5fa; /* Bleu clair au survol */
        }

        .footer p {
            margin: 8px 0;
            display: flex;
            align-items: center;
        }

        .footer img {
            width: 20px;
            margin-right: 10px;
            filter: brightness(0) invert(1); /* Pour que les icônes restent visibles sur fond sombre */
        }

        .footer-text {
            width: 100%;
            text-align: center;
            margin-top: 30px;
            color: #94a3b8;
            font-size: 0.9em;
            border-top: 1px solid #334155;
            padding-top: 15px;
        }
    </style>
</head>
<body>

    <header class="navbar">
        <div class="logo">
            <img src="image/badgelogo.png" alt="Logo AéroBadge">
            <a href="stage.php" class="spanheader">AéroBadge</a>
        </div>
        <nav class="nav-menu">
            <a href="stage.php">Accueil</a>
            <a href="modeles.php">Modèles</a>
            <a href="professionnels.php">Professionnels</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <div class="contact-container">
        <h1>Contactez-nous</h1>
        <p>Vous avez une question ? Remplissez le formulaire ci-dessous et nous vous répondrons rapidement.</p>
        <form action="envoyer_message.php" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" class="button">Envoyer</button>
        </form>
    </div>

    <footer class="footer">
        <div class="a">
            <h2>AeroBadge</h2>
            <p>La solution professionnelle pour la création de badges d'identification d'aéroport.</p>
        </div>
        <div class="a">
            <h2>Liens utiles</h2>
            <a href="stage.php">Accueil</a>
            <a href="modeles.php">Modèles</a>
            <a href="professionnels.php">Professionnels</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="a">
            <h2>Contact</h2>
            <p><img src="image/ic.png" alt="Contact" />Aéroport de Marrakech, Maroc</p>
            <p><img src="image/phone.png" alt="Téléphone" />+212 5 24 44 44 44</p>
            <p><img src="image/email.png" alt="Email" />contact@aerobadge.com</p>
        </div>
        <p class="footer-text">© 2025 AéroBadge. Tous droits réservés.</p>
    </footer>

</body>
</html>
