document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.quantite-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const container = this.closest('.quantite-controls');
            const valueElement = container.querySelector('.quantite-valeur');
            let currentValue = parseInt(valueElement.textContent);
            
            // Décrémenter ou incrémenter selon le bouton cliqué
            if (this.textContent.includes('−')) {
                currentValue = Math.max(1, currentValue - 1); // Ne pas descendre en dessous de 1
            } else {
                currentValue += 1;
            }
            
            valueElement.textContent = currentValue;
        });
    });

    // =============================================
    // GESTION DES MODALES
    // =============================================
    // Création de l'overlay (fond sombre)
    const overlay = document.createElement('div');
    overlay.className = 'modal-overlay';
    document.body.appendChild(overlay);

    // Variables pour la gestion des modales
    let currentModal = null;

    // Fonction pour ouvrir une modale
    function openModal(modalId) {
        currentModal = document.getElementById(modalId);
        if (!currentModal) return;
        
        currentModal.classList.add('active');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden'; // Bloquer le scroll de la page
    }

    // Fonction pour fermer la modale
    function closeModal() {
        if (currentModal) {
            currentModal.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = ''; // Rétablir le scroll
            currentModal = null;
        }
    }

    // Écouteurs d'événements pour les boutons "Plus d'infos"
    document.querySelectorAll('.open-modal').forEach(btn => {
        btn.addEventListener('click', function() {
            const modalId = this.getAttribute('data-modal');
            openModal(modalId);
        });
    });

    // Écouteurs pour les boutons de fermeture
    document.querySelectorAll('.close-button').forEach(btn => {
        btn.addEventListener('click', closeModal);
    });

    // Fermer en cliquant sur l'overlay
    overlay.addEventListener('click', closeModal);

    // Fermer avec la touche Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });

    // Empêcher la propagation du clic dans la modale
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });

    // =============================================
    // OPTIMISATIONS SUPPLEMENTAIRES
    // =============================================
    // Gestion des transitions pour un meilleur rendu visuel
    overlay.style.transition = 'opacity 0.3s ease';
    document.querySelectorAll('.modal').forEach(modal => {
        modal.style.transition = 'all 0.3s ease';
    });
});
document.addEventListener('DOMContentLoaded', function() {
    // Variables globales
    const overlay = document.createElement('div');
    overlay.className = 'modal-overlay';
    document.body.appendChild(overlay);
    let currentModal = null;

    // Fonction pour ouvrir une modale
    function openModal(modalId) {
        currentModal = document.getElementById(modalId);
        if (!currentModal) return;
        
        currentModal.classList.add('active');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // Fonction pour fermer la modale
    function closeModal() {
        if (currentModal) {
            currentModal.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = '';
            currentModal = null;
        }
    }

    // Écouteurs d'événements
    document.querySelectorAll('.open-modal').forEach(btn => {
        btn.addEventListener('click', function() {
            const modalId = this.getAttribute('data-modal');
            openModal(modalId);
        });
    });

    document.querySelectorAll('.close-button').forEach(btn => {
        btn.addEventListener('click', closeModal);
    });

    overlay.addEventListener('click', closeModal);

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeModal();
    });

    // Empêcher la fermeture quand on clique dans la modale
    document.querySelectorAll('.modal-content').forEach(content => {
        content.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
});