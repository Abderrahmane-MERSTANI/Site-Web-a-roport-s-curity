<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voici votre badge</title>
    <link rel="stylesheet" type="text/css" href="stage.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <img src="image/badgelogo.png" alt="Logo AéroBadge">
            <a href="#" class="spanheader">AéroBadge</a>
        </div>
        <nav class="nav-menu">
            <a href="#">Accueil</a>
            <a href="modeles.php">Modèles</a>
            <a href="professionnels.php">Professionnels</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    
    <div class="container2">
        <div class="div2">
            <h1 class="h12">
                Créez votre badge <span style="color: blue;">personnalisé !</span>
            </h1>
            <div class="div3">
                Personnalisez votre badge d'identification avec notre outil facile à utiliser. Parfait pour le personnel des aéroports, les agents de sécurité et les visiteurs autorisés.
            </div>
        </div>
        <div class="div4">
            <button onclick="window.location.href='formulaire.php'" class="boutton1">Créer le Badge</button>
        </div>
        <div class="div5">
            <button onclick="window.location.href='modeles.php'" class="boutton2">Voir les Modèles</button>
        </div>
        
        <div class="div6">
            <img src="image/personne.jpg" class="personne-logo" alt="Photo utilisateur">
            <img src="image/avion.jpg" class="avion-logo" alt="Icône avion">
            <span class="nom-utilisateur">Votre Nom</span>
            <p class="description-utilisateur">Type du badge</p>
            <p class="id-badge"><?php echo genererIDUnique(); ?></p>
            <p class="date-expiration">Exp : <?php echo dateExpiration(); ?></p>
        </div>
    </div>
    
    <div class="container3">
        <ul class="ul1">
            <li class="li1">Types des Badges :</li>
        </ul>
        <p class="texte-holder">Obtenez votre badge aéroportuaire ou votre titre de circulation en ligne</p>
        
        <div class="cont">
            <div class="container4">
                <div class="carte-produit">
                    <img src="image/1.png" alt="Badge permanent">
                    <div class="contenu">
                        <div class="titre">Badge permanent</div>
                        <div class="description">
                            Maximum 3 ans<br>
                            <button popovertarget="my-popover" class="open-modal" aria-label="Plus d'informations sur le badge permanent">Plus d'infos</button>
                            <div class="pop" id="my-popover" popover>
                                <h1>Badge permanent</h1>
                                <p>
                                    Titre pour toute personne ayant une activité régulière dans la Zone Côté Piste de l’Aéroport.<br>Validité maximale de <font style="font-weight: bold;">3 ans</font>.<br>
                                    <font style="font-weight: bold;">
                                        Badge permanent rouge
                                    </font>
                                    = Accès aux secteurs <font style="font-weight: bold;">sûreté</font> et <font style="font-weight: bold;">fonctionnels</font><br>Badge permanent orange = Accès aux secteurs <font style="font-weight: bold;">fonctionnels</font> uniquement
                                </p>
                            </div>
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
                                <button class="btn-reserver" onclick="window.location.href='connexion.php'">JE RÉSERVE</button>
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
                                <button class="btn-reserver" onclick="window.location.href='connexion.php'">JE RÉSERVE</button>
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
                                <button class="btn-reserver" onclick="window.location.href='connexion.php'">JE RÉSERVE</button>
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
                                <button class="btn-reserver" onclick="window.location.href='connexion.php'">JE RÉSERVE</button>
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
                                <button class="btn-reserver" onclick="window.location.href='connexion.php'">JE RÉSERVE</button>
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
                                <button class="btn-reserver" onclick="window.location.href='connexion.php'">JE RÉSERVE</button>
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
                                <button class="btn-reserver" onclick="window.location.href='connexion.php'">JE RÉSERVE</button>
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
                                <button class="btn-reserver" onclick="window.location.href='connexion.php'">JE RÉSERVE</button>
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
                                <button class="btn-reserver" onclick="window.location.href='connexion.php'">JE RÉSERVE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container0">
    <h1>Pourquoi choisir AéroBadge ?</h1>
    
    <div class="features-container">
        <div class="feature-card">
            <img src="image/security.png" alt="Sécurité">
            <h2>Sécurité renforcée</h2>
            <ul>
                <li>Nos badges intègrent des éléments anti-contrefaçon</li>
                <li>QR codes uniques pour une authentification facile</li>
            </ul>
        </div>
        
        <div class="feature-card">
            <img src="image/rapide.png" alt="Rapidité">
            <h2>Création rapide</h2>
            <p>Générez des badges professionnels en quelques minutes seulement avec notre outil intuitif.</p>
        </div>
        
        <div class="feature-card">
            <img src="image/custom.png" alt="Personnalisation">
            <h2>Personnalisation avancée</h2>
            <p>Choisissez parmi des dizaines de modèles et personnalisez chaque élément de votre badge.</p>
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
            <a href="#">Accueil</a>
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
    
    <!-- Modale et footer existants -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <button class="close-button" aria-label="Fermer la modale">✖</button>
            <div id="modal-content"></div>
        </div>
    </div>
    <!-- Modale -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <button class="close-button" aria-label="Fermer la modale">✖</button>
            <div id="modal-content"></div>
        </div>
    </div>

    <script src="stage.js"></script>
</body>
</html>

<?php
function genererIDUnique() {
    $lettres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $prefixe = substr(str_shuffle($lettres), 0, 3);
    $annee = date('Y');
    $suffixe = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
    return "Id : {$prefixe}-{$annee}-{$suffixe}";
}

function dateExpiration() {
    $currentMonth = date('n');
    $currentYear = date('Y');
    $expirationYear = $currentYear + 1;
    return $currentMonth . '/' . $expirationYear;
}
?>