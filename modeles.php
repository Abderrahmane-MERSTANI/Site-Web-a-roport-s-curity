<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modèles de Badges</title>
        <link rel="stylesheet" type="text/css" href="stage.css">
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
    <div class="containerbase">
        <video autoplay muted loop plays-inline class="back">
            <source src="image/morocco.webm" type="video/webm">
        </video>
        <h1 id="titre">Pouvez-vous choisir votre modèle de badge : </h1>
        <h2 id="sous-titre">Modèles disponibles :</h2>
        <h3 id="sous-titre2">Pour choisir un modèle, cliquez sur le button " Je réserve " :</h3>
        <div class="cont">
            <div class="container4">
                <div class="carte-produit">
                    <img src="image/1.png" alt="Badge permanent">
                    <div class="contenu">
                        <div class="titre">Badge permanent</div>
                        <div class="description">
                            Maximum 3 ans<br>
                            <button class="open-modal" aria-label="Plus d'informations sur le badge permanent">Plus d'infos</button>
                        </div>
                        <div class="bas">
                            <div>
                                <div class="quantite-label">Qté</div>
                                <div class="quantite-controls">
                                    <button class="quantite-btn" onclick="changerQuantite(-1)">−</button>
                                    <span id="valeur1" class="quantite-valeur">1</span>
                                    <button class="quantite-btn" onclick="changerQuantite(1)">+</button>
                                </div>
                            </div>
                            <div>
                                <div class="prix">62,40 €</div>
                                <button class="btn-reserver" onclick="window.location.href='formulaire.php'">JE RÉSERVE</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="carte-produit">
                    <img src="image/2.png" alt="Titre de Circulation Accompagné">
                    <div class="contenu">
                        <div class="titre">Titre de Circulation Accompagné</div>
                        <div class="description">
                            Maximum 15 jours sur une période de 6 mois<br>
                            <button class="open-modal" aria-label="Plus d'informations sur le titre de circulation">Plus d'infos</button>
                        </div>
                        <div class="bas">
                            <div>
                                <div class="quantite-label">Qté</div>
                                <div class="quantite-controls">
                                    <button class="quantite-btn" onclick="changerQuantite(-1)">−</button>
                                    <span id="valeur2" class="quantite-valeur">1</span>
                                    <button class="quantite-btn" onclick="changerQuantite(1)">+</button>
                                </div>
                            </div>
                            <div>
                                <div class="prix">7,20 €</div>
                                <button class="btn-reserver" onclick="window.location.href='formulaire.php'">JE RÉSERVE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carte-produit">
                    <img src="image/3.png" alt="Titre de Circulation Temporaire">
                    <div class="contenu">
                        <div class="titre">Titre de Circulation Temporaire</div>
                        <div class="description">
                            Maximum 5 jours<br>
                            <button class="open-modal" aria-label="Plus d'informations sur le titre de circulation">Plus d'infos</button>
                        </div>
                        <div class="bas">
                            <div>
                                <div class="quantite-label">Qté</div>
                                <div class="quantite-controls">
                                    <button class="quantite-btn" onclick="changerQuantite(-1)">−</button>
                                    <span id="valeur2" class="quantite-valeur">1</span>
                                    <button class="quantite-btn" onclick="changerQuantite(1)">+</button>
                                </div>
                            </div>
                            <div>
                                <div class="prix">7,20 €</div>
                                <button class="btn-reserver" onclick="window.location.href='formulaire.php'">JE RÉSERVE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carte-produit">
                    <img src="image/4.png" alt="Accés Véhicule Annuel">
                    <div class="contenu">
                        <div class="titre">Accés Véhicule Annuel</div>
                        <div class="description">
                            Validité jusqu'au 31 décembre de l'année<br>
                            <button class="open-modal" aria-label="Plus d'informations sur le titre de circulation">Plus d'infos</button>
                        </div>
                        <div class="bas">
                            <div>
                                <div class="quantite-label">Qté</div>
                                <div class="quantite-controls">
                                    <button class="quantite-btn" onclick="changerQuantite(-1)">−</button>
                                    <span id="valeur2" class="quantite-valeur">1</span>
                                    <button class="quantite-btn" onclick="changerQuantite(1)">+</button>
                                </div>
                            </div>
                            <div>
                                <div class="prix">26,40 €</div>
                                <button class="btn-reserver" onclick="window.location.href='formulaire.php'">JE RÉSERVE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carte-produit">
                    <img src="image/5.png" alt="Titre de Circulation Temporaire">
                    <div class="contenu">
                        <div class="titre">Accés Véhicule Temporaire</div>
                        <div class="description">
                            Maximum 5 jours<br>
                            <button class="open-modal" aria-label="Plus d'informations sur le titre de circulation">Plus d'infos</button>
                        </div>
                        <div class="bas">
                            <div>
                                <div class="quantite-label">Qté</div>
                                <div class="quantite-controls">
                                    <button class="quantite-btn" onclick="changerQuantite(-1)">−</button>
                                    <span id="valeur2" class="quantite-valeur">1</span>
                                    <button class="quantite-btn" onclick="changerQuantite(1)">+</button>
                                </div>
                            </div>
                            <div>
                                <div class="prix">4,20 €</div>
                                <button class="btn-reserver" onclick="window.location.href='formulaire.php'">JE RÉSERVE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carte-produit">
                    <img src="image/6.png" alt="Carte Professionnelle">
                    <div class="contenu">
                        <div class="titre">Carte Professionnelle</div>
                        <div class="description">
                            <button class="open-modal" aria-label="Plus d'informations sur le titre de circulation">Plus d'infos</button>
                        </div>
                        <div class="bas">
                            <div>
                                <div class="quantite-label">Qté</div>
                                <div class="quantite-controls">
                                    <button class="quantite-btn" onclick="changerQuantite(-1)">−</button>
                                    <span id="valeur2" class="quantite-valeur">1</span>
                                    <button class="quantite-btn" onclick="changerQuantite(1)">+</button>
                                </div>
                            </div>
                            <div>
                                <div class="prix">7,20 €</div>
                                <button class="btn-reserver" onclick="window.location.href='formulaire.php'">JE RÉSERVE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carte-produit">
                    <img src="image/7.png" alt="Carte d'Accés Coté Ville">
                    <div class="contenu">
                        <div class="titre">Carte d'Accés Coté Ville</div>
                        <div class="description">
                            <button class="open-modal" aria-label="Plus d'informations sur le titre de circulation">Plus d'infos</button>
                        </div>
                        <div class="bas">
                            <div>
                                <div class="quantite-label">Qté</div>
                                <div class="quantite-controls">
                                    <button class="quantite-btn" onclick="changerQuantite(-1)">−</button>
                                    <span id="valeur2" class="quantite-valeur">1</span>
                                    <button class="quantite-btn" onclick="changerQuantite(1)">+</button>
                                </div>
                            </div>
                            <div>
                                <div class="prix">62,40 €</div>
                                <button class="btn-reserver" onclick="window.location.href='formulaire.php'">JE RÉSERVE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carte-produit">
                    <img src="image/8.png" alt="Formation Sureté">
                    <div class="contenu">
                        <div class="titre">Formation Sureté</div>
                        <div class="description">
                            Formation Sureté 11.2.6.2<br>
                            <button class="open-modal" aria-label="Plus d'informations sur le titre de circulation">Plus d'infos</button>
                        </div>
                        <div class="bas">
                            <div>
                                <div class="quantite-label">Qté</div>
                                <div class="quantite-controls">
                                    <button class="quantite-btn" onclick="changerQuantite(-1)">−</button>
                                    <span id="valeur2" class="quantite-valeur">1</span>
                                    <button class="quantite-btn" onclick="changerQuantite(1)">+</button>
                                </div>
                            </div>
                            <div>
                                <div class="prix">43,68 €</div>
                                <button class="btn-reserver" onclick="window.location.href='formulaire.php'">JE RÉSERVE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carte-produit">
                    <img src="image/9.png" alt="Permis Piste">
                    <div class="contenu">
                        <div class="titre">Permis Piste</div>
                        <div class="description">
                            Habilitation à la conduite en Zone Coté Piste<br>
                            <button class="open-modal" aria-label="Plus d'informations sur le titre de circulation">Plus d'infos</button>
                        </div>
                        <div class="bas">
                            <div>
                                <div class="quantite-label">Qté</div>
                                <div class="quantite-controls">
                                    <button class="quantite-btn" onclick="changerQuantite(-1)">−</button>
                                    <span id="valeur2" class="quantite-valeur">1</span>
                                    <button class="quantite-btn" onclick="changerQuantite(1)">+</button>
                                </div>
                            </div>
                            <div>
                                <div class="prix">38,40 €</div>
                                <button class="btn-reserver" onclick="window.location.href='formulaire.php'">JE RÉSERVE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <style>
        .back{
            position: absolute;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            background-attachment: fixed
        }
        @media (min-aspect-ratio: 16/9) {
            .back {
                width: 100%;
                height: auto;
            }
        }
        @media (max-aspect-ratio: 16/9) {
            .back {
                width: auto;
                height: 100%;
            }
        }
        .containerbase {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
        #sous-titre {
            margin-left: 70px;
            margin-top: 70px;
            color: white;
            font-size: 25px;
        }
        #sous-titre2 {
            margin-left: 40px;
            color: white;
            text-decoration: none;
            font-size: 20px;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        #titre {
            text-align: center;
            
            background-image: url("image/deg5.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-clip: text;
            animation: animate 5s linear infinite;
            margin-bottom: 20px;
            color: transparent;
            color: white;
            font-style: italic;
            font-size: 40px;
        }
        @keyframes animate {
            to { background-position-x: -200px; }
        }
        .footer {
            color: #cbd5e1;
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
    </style>
    <script>
        function buttonClick() {
            document.getElementById("modal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("modal").style.display = "none";
        }

        function changerQuantite(delta) {
            const valeurElement = document.getElementById("valeur");
            let valeur = parseInt(valeurElement.textContent);
            valeur += delta;
            if (valeur < 1) valeur = 1; // Ne pas descendre en dessous de 1
            valeurElement.textContent = valeur;
        }</script>
    <script src="stage.js"></script>
</body>
</html>
