<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations de connexion</title>
    <link rel="stylesheet" href="stage.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg,rgb(51, 126, 224), #ACB6E5);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            border-radius: 5px;
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

        .form-container {
            background-color: #ffffff;
            max-width: 400px;
            margin: 60px auto;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .intro-text {
            color: #444;
            margin-bottom: 25px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
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
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #2980b9;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer {
            background-color: #1e293b;
            color: #cbd5e1;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 40px 20px;
            border-top: 1px solid #334155;
            margin-top: auto;
        }

        .footer h2 {
            color: #f1f5f9;
        }

        .footer a {
            color: #38bdf8;
            display: block;
            margin-bottom: 8px;
        }

        .footer-text {
            text-align: center;
            width: 100%;
            margin-top: 20px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .form-container {
                margin: 40px 20px;
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
            <a href="#" class="spanheader">AéroBadge</a>
        </div>
        <nav class="nav-menu">
            <a href="stage.php">Accueil</a>
            <a href="modeles.php">Modèles</a>
            <a href="professionnels.php">Professionnels</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <div class="form-container">
        <h1>Informations de connexion</h1>
        <p class="intro-text">Veuillez remplir les informations suivantes pour vous connecter.</p>

        <form method="POST" action="verifier_connexion.php">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit" class="button">Se connecter</button>
        </form>
        <p style="margin-top: 15px;">Pas encore inscrit ? <a href="formulaire.php">Créez un compte</a></p>
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
            <p>Aéroport de Marrakech, Maroc</p>
            <p>+212 5 24 44 44 44</p>
            <p>contact@aerobadge.com</p>
        </div>
        <p class="footer-text">© 2025 AéroBadge. Tous droits réservés.</p>
    </footer>

</body>
</html>
