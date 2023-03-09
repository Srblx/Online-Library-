// Récupération de tous les sel
const selectTags = document.querySelectorAll('select');

// Ajout d'un écouteur d'événements pour chacun des sel
selectTags.forEach(sel => {
  sel.addEventListener('change', function() {
    console.log(this);
    // Récupération de la valeur de l'option sélectionnée
    const selectedOption = sel.options[sel.selectedIndex].getAttribute('href');
    console.log(selectedOption);
    

    // Validation du choix de l'utilisateur
    if (selectedOption) {
      // Redirection vers l'URL de l'option sélectionnée
      window.location.href = selectedOption;
    }
  });
});