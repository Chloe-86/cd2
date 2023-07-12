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
    
    const arrowDown = document.querySelector('.mobile-menu-btn');
    arrowDown.setAttribute('aria-label', 'fleche ouverture menu');

    const arrowUp = document.querySelector('.scrolltop');
    arrowUp.setAttribute('aria-label', 'fleche retour haut de page');
    arrowUp.setAttribute('role',"button");

    const logoRechercher = document.querySelector('.main-nav-search');
    logoRechercher.setAttribute('aria-label',"bouton de recherche");
    logoRechercher.setAttribute('role',"search");

    const ariaA = document.querySelector("#page-footer > div > div > div.credit > a:nth-child(1)");
    ariaA.setAttribute('aria-label', 'Site officiel de WP Royal Themes');

    const tab= document.querySelector("#block-3");
    tab.tabindex=0;
    
    const labelElement = document.querySelector('#form-wysija-2 > p > label');
    labelElement.setAttribute('for', 'form-validation-field-0');
    const inputElement = document.querySelector(".wysija-input");
    inputElement.setAttribute('id', 'form-validation-field-0');

  });
  
  // 
  