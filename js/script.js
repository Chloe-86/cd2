const reseaux = {
    twitter: 'Twitter',
    facebook: 'Facebook',
    linkedin: 'LinkedIn',
    pinterest: 'Pinterest'
  };
  
  // Attendre que le document soit chargé
  document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner toutes les icônes de Social Warfare
    const icons = document.querySelectorAll('.nc_tweetContainer');
    
    // Parcourir toutes les icônes et ajouter l'attribut aria-label
    icons.forEach(function(icon) {
      const network = icon.getAttribute('data-network');
      if (network && reseaux.hasOwnProperty(network)) {
        const label = `Partager sur ${reseaux[network]}`;
        icon.setAttribute('aria-label', label);
      }
    });
    const arrowDown = document.querySelector('.fa-chevron-down');
    arrowDown.setAttribute('aria-label', 'fleche ouverture menu');

    const arrowUp = document.querySelector('.fa-angle-up');
    arrowUp.setAttribute('aria-label', 'fleche retour haut de page');
  });
  