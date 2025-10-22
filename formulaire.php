<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations de connexion</title>
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-top: 30px;
        }

        .intro-text {
            text-align: center;
            color: #444;
            margin-bottom: 20px;
        }

        form {
            background-color: #ffffff;
            max-width: 700px;
            margin: 30px auto;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #3498db;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-top: 30px;
        }

        h3 {
            font-size: 1em;
            color: #555;
            margin-bottom: 5px;
            margin-top: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input:focus, select:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .checkbox-item {
            margin: 20px 0;
        }

        .checkbox-item label {
            margin-left: 10px;
        }

        .button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
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

        /* Footer */
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

        /* Pour les petits écrans */
        @media (max-width: 768px) {
            form {
                padding: 20px;
            }

            .footer {
                flex-direction: column;
                text-align: center;
            }
        }
        .navbar {
            font-size: 16px;
            font-weight: bold;
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
        .logo a {
            font-size: 24px;
            color: #2c3e50;
            text-decoration: none;
        }
        .nav-menu {
            display: flex;
            gap: 20px;
        }
        .nav-menu a {
            text-decoration: none;
            color: #2c3e50;
            font-size: 18px;
        }
        .nav-menu a:hover {
            color: #3498db;
        }
        .spanheader {
            font-size: 24px;
            color: #2c3e50;
            text-decoration: none;
        }
        .spanheader:hover {
            color: #3498db;
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
            <a href="#" class="spanheader">AéroBadge</a>
        </div>
        <nav class="nav-menu">
            <a href="stage.php">Accueil</a>
            <a href="modeles.php">Modèles</a>
            <a href="professionnels.php">Professionnels</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <h1>Informations de connexion</h1>
    <p class="intro-text">Veuillez remplir les informations suivantes pour créer un couvert.</p>
    
    <form id="registration-form" method="POST" action="enregistrer_badge.php">
        <h1>Informations de connexion</h1>
    <p class="intro-text">Veuillez remplir les informations suivantes pour créer un couvert.</p>

    <form id="registration-form" method="POST" action="enregistrer_badge.php">
        <h2>Informations personnelles</h2>
        
        <div class="form-group">
            <h3>Nom</h3>
            <input type="text" id="name" name="name" required placeholder="Entrez votre nom">
        </div>
        
        <div class="form-group">
            <h3>Prénom</h3>
            <input type="text" id="first_name" name="first_name" required placeholder="Entrez votre prénom">
        </div>
        
        <div class="form-group">
            <h3>Email</h3>
            <input type="email" id="email" name="email" required placeholder="exemple@email.com">
        </div>
        
        <div class="form-group">
            <h3>Confirmer l'email</h3>
            <input type="email" id="confirm_email" name="confirm_email" required placeholder="Confirmez votre email">
        </div>
        
        <div class="form-group">
            <h3>Mot de passe</h3>
            <input type="password" id="password" name="password" required placeholder="Créez un mot de passe">
        </div>
        
        <div class="form-group">
            <h3>Confirmer le mot de passe</h3>
            <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirmez votre mot de passe">
        </div>
        
        <h2>Informations de connexion</h2>
        
        <div class="form-group">
            <h3>Nom d'utilisateur</h3>
            <input type="text" id="username" name="username" required placeholder="Choisissez un nom d'utilisateur">
        </div>

        <div class="form-group">
            <h3>Numéro de téléphone</h3>
            <input type="text" id="phone" name="phone" required placeholder="Entrez votre numéro de téléphone">
        </div>
        <div class="form-group">
            <h3>Adresse</h3>
            <input type="text" id="address" name="address" required placeholder="Entrez votre adresse">
        </div>
        <h2>Informations supplémentaires</h2>
        <div class="form-group">
            <h3>Date de naissance</h3>
            <input type="text" id="birth_date" name="birth_date" required placeholder="JJ/MM/AAAA">
        </div>
        <div class="form-group">
            <h3>Genre</h3>
            <select id="gender" name="gender" required>
                <option value="">Sélectionnez votre genre</option>
                <option value="male">Homme</option>
                <option value="female">Femme</option>
                <option value="other">Autre</option>
            </select>
        </div> 
        <div class="form-group">
            <h3>Ville</h3>
            <input type="text" id="city" name="city" required placeholder="Entrez votre ville">
        </div>
        <div class="form-group">
            <h3>Code postal</h3>
            <input type="text" id="postal_code" name="postal_code" required placeholder="Entrez votre code postal">
        </div>
        <div class="form-group">
            <h3>Pays</h3>
            <input type="text" id="country" name="country" required placeholder="Entrez votre pays">
        </div>
        <h2>Préférences de notification</h2>
        <div class="form-group">
            <h3>Préférences de notification</h3>
            <select id="notification_preferences" name="notification_preferences" required>
                <option value="">Sélectionnez vos préférences de notification</option>
                <option value="email">Email</option>
                <option value="sms">SMS</option>
                <option value="push">Notifications push</option>
            </select>
        </div>
        <h2>Informations de facturation</h2>
        <div class="form-group">
            <h3>Numéro de carte de crédit</h3>
            <input type="text" id="credit_card_number" name="credit_card_number" required placeholder="Entrez votre numéro de carte de crédit">
        </div>
        <div class="form-group">
            <h3>Date d'expiration de la carte</h3>
            <input type="text" id="credit_card_expiry" name="credit_card_expiry" required placeholder="MM/AA">
        </div>
        <div class="form-group">
            <h3>Code de sécurité de la carte</h3>
            <input type="text" id="credit_card_cvc" name="credit_card_cvc" required placeholder="Entrez le code de sécurité (CVC)">
        </div>
        <h2>Préférences de communication</h2>
        
        <div class="checkbox-item">
            <input type="checkbox" id="newsletter" name="newsletter">
            <label for="newsletter">Je souhaite recevoir la newsletter</label>
        </div>
        
        <div class="checkbox-item">
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">J'accepte les <a href="#">conditions d'utilisation</a></label>
        </div>
        
        <button type="submit" class="button">CRÉER UN COUVERT</button>
        <button onclick="window.location.href='connexion.php'" type="reset" class="button" style="background-color: #e74c3c;">Connexion</button>
    </form>

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
