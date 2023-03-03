<header>
<?php
session_start();

// Vérifier si le temps de début de session est enregistré dans la variable $_SESSION
if (!isset($_SESSION['start_time'])) {
  $_SESSION['start_time'] = date('Y-m-d H:i:s');
}

if (!isset($_SESSION['role'])) {
  header("Location: index.php");
  exit();
}
?>
<script>
  // Récupération de l'heure de départ en JavaScript
  let startTimestamp = Date.parse('<?php echo $_SESSION['start_time'] ?>');

  // Vérification que startTimestamp est un nombre valide
  if (isNaN(startTimestamp)) {
    console.error('Invalid start time:', '<?php echo $_SESSION['start_time'] ?>');
    startTimestamp = Date.now(); // Utiliser l'heure actuelle si startTime est invalide
  }
</script>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center" id="titre">
			<h1>Bibliothèque en ligne</h1>
			</div>
			<div class="btnDark" id="btnDark"><i class="fa-solid fa-moon"></i> </div>
<nav>
  </div>
  <div class="infoCoG">

    <a href="../PhpTraitement/deconnexion.php" id="deco" onclick="return confirm('Êtes-vous sûr de vouloir vous déconnecter ?');">Déconnexion</a>
  </div>
  <div class="infoCoD">
    <?= "Bonjour " . '<br>'; ?>
    <?= $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> <br>
	<span id="timer"></span>
  </div>
</nav>
		</div>
		<ul class="nav justify-content-center nav-pills" id="menu">
			<li class="nav-item dropdown">
			<div class="btn">
  			<a href="?controller=home&action=home" id="test" onclick="alert('Vous allez être rediriger sur la page d\'accueil !');">Accueil</a>
  			<i class="fa-brands fa-readme" style="color: #0366d6;"></i>
			</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Livres
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="?controller=livre&action=all_livres">Tous les livres</a>	
					<a class="dropdown-item" href="?controller=livre&action=all_titre">Par titre</a>					
					<a class="dropdown-item" href="?controller=livre&action=all_auteur">Par auteur</a>
					<a class="dropdown-item" href="?controller=livre&action=all_editeur">Par éditeur</a>
					<a class="dropdown-item" href="?controller=livre&action=insert">Ajouter un livre</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Fournisseurs
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="?controller=fournisseur&action=all_fournisseur">Tous les fournisseurs</a>
					<a class="dropdown-item" href="?controller=fournisseur&action=all_raison_social">Par raison sociale</a>
					<a class="dropdown-item" href="?controller=fournisseur&action=all_localite">Par localité</a>
					<a class="dropdown-item" href="?controller=fournisseur&action=all_pays">Par pays</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Commandes
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="?controller=commande&action=all_commande">Toutes les commandes</a>
					<a class="dropdown-item" href="?controller=commande&action=all_cediteur">Par éditeur</a>
					<a class="dropdown-item" href="?controller=commande&action=all_fournisseur">Par fournisseur</a>
					<a class="dropdown-item" href="?controller=commande&action=all_date">Par date</a>
				</div>
			</li>
			
		</ul>
	</div>
	<h2 id="title">Bienvenue sur le site de consultation de livres</h2>
<script>
  // Récupération de l'heure de départ
  let startTime = Date.parse('<?php echo $_SESSION['start_time'] ?>');

  // Vérification que startTime est une date valide
  if (isNaN(startTimestamp)) {
    console.error('Invalid start time:', startTime);
    startTimestamp = Date.now(); // Utiliser l'heure actuelle si startTime est invalide
  }

  // Fonction pour mettre à jour le compteur de temps
  function updateTimer() {
    // Récupération du timestamp actuel en millisecondes
    let now = Date.now();
    // Calcul du temps écoulé depuis le début de la session en millisecondes
    let elapsedTime = now - startTimestamp
    // Calcul des heures écoulées
    let hours = Math.floor(elapsedTime / 3600000);
    // Calcul des minutes écoulées
    let minutes = Math.floor((elapsedTime % 3600000) / 60000);
    // Calcul des secondes écoulées
    let seconds = Math.floor((elapsedTime % 60000) / 1000);
    // Récupération de l'élément HTML pour afficher le timer
    let timer = document.getElementById("timer");
    // Formatage de l'affichage du timer
    timer.innerHTML = hours + "H " + minutes + "M " + seconds + "s";
    // Mise à jour du timer toutes les secondes
    setTimeout(updateTimer, 1000);
  }

  // Lancement de la mise à jour du timer
  updateTimer();
</script>
</header>
