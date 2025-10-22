<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions pour les professionnels - AéroBadge</title>
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

        .pro-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 30px 40px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .pro-section {
            margin-bottom: 40px;
        }

        .pro-section h2 {
            color: #3498db;
            margin-bottom: 10px;
        }

        .pro-section p {
            color: #555;
            line-height: 1.6;
        }

        .cta {
            text-align: center;
            margin-top: 30px;
        }

        .button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
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

        @media (max-width: 768px) {
            .pro-container {
                margin: 20px;
                padding: 20px;
            }

            .footer {
                flex-direction: column;
                text-align: center;
            }
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

    <div class="pro-container">
        <h1>Solutions pour les professionnels</h1>

        <div class="pro-section">
            <h2>Badges d’identification sécurisés</h2>
            <p>Nous proposons une solution complète pour les professionnels de l’aérien : création de badges personnalisés, conformes aux normes de sécurité aéroportuaire.</p>
        </div>

        <div class="pro-section">
            <h2>Services adaptés aux entreprises</h2>
            <p>Que vous soyez une compagnie aérienne, un gestionnaire d’aéroport ou un prestataire de services, nous vous accompagnons avec des outils flexibles : gestion des accès, impression à la demande, QR Code sécurisé, etc.</p>
        </div>

        <div class="pro-section">
            <h2>Tarification entreprise</h2>
            <p>Profitez de nos tarifs dégressifs et de nos solutions sur mesure pour les grands comptes, avec accompagnement technique dédié.</p>
        </div>

        <div class="cta">
            <p>Vous souhaitez obtenir un devis ou en savoir plus ?</p>
            <a href="contact.php" class="button">Contactez-nous</a>
        </div>
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
