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

function validateFormInscrip() {
  let firstName = document.querySelector("#firstName").value;
  let lastName = document.querySelector("#lastName").value;
  let password = document.querySelector("#password").value;

  if (firstName.length < 2 || firstName.length > 30) {
      alert("Le nom doit contenir entre 2 et 30 caractères.");
      return false;
  }

  if (lastName.length < 2 || lastName.length > 30) {
      alert("Le prénom doit contenir entre 2 et 30 caractères.");
      return false;
  }

  if (password.length < 8 || password.length > 20) {
      alert("Le mot de passe doit contenir entre 8 et 20 caractères.");
      return false
  }

  return true;
}

document.getElementById("formAdd").addEventListener("submit", function(event) {
  let titreInput = document.getElementById('titre');
  let nomAuteurInput = document.getElementById('nomAuteur');
  let prenomAuteurInput = document.getElementById('prenomAuteur');

  if (titreInput.value.length < 2 || titreInput.value.length > 30) {
    alert("Le titre doit contenir entre 2 et 30 caractères.");
    event.preventDefault();
  }

  if (nomAuteurInput.value.length < 2 || nomAuteurInput.value.length > 30) {
    alert("Le nom de l'auteur doit contenir entre 2 et 30 caractères.");
    event.preventDefault();
  }

  if (prenomAuteurInput.value.length < 2 || prenomAuteurInput.value.length > 30) {
    alert("Le prénom de l'auteur doit contenir entre 2 et 30 caractères.");
    event.preventDefault();
  }
});

   

 // Récupération de tous les select
 const selects = document.querySelectorAll('select');

 // Ajout d'un écouteur d'événements pour chacun des select
 selects.forEach(select => {
   select.addEventListener('change', function() {
     // Récupération de la valeur de l'option sélectionnée
     const selectedOption = select.options[select.selectedIndex].getAttribute('href');

     // Validation du choix de l'utilisateur
     if (selectedOption) {
       // Redirection vers l'URL de l'option sélectionnée
       window.location.href = selectedOption;
     }
   });
 });





