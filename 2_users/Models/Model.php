<?php

class Model
{   //* Début de la Classe

    private $bd;

    private static $instance = null;

    /*
         * Constructeur créant l'objet PDO et l'affectant à $bd
         */
    private function __construct()
    {  //* Fonction qui sert à faire le lien avec la BDD

        $dsn = "mysql:host=localhost;dbname=bibliotheque";   //* Coordonnées de la BDD
        $login = "root";   //* Identifiant d'accès à la BDD
        $mdp = ""; //* Mot de passe d'accès à la BDD
        $this->bd = new PDO($dsn, $login, $mdp);
        $this->bd->query("SET NAMES 'utf8'");
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    //* get_model()

    public static function get_model()
    {
        //* Fonction qui sert à créer une instance de Model pour l'appeler dans chaque Controller (équivalent de $connex)
        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }

    /**
     *Récupère tous les livres de la base de données @return array Tableau d'objets contenant les informations de tous les livres
     **/
    public function get_all_livres()
    {
        // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par titre
        $r = $this->bd->prepare("SELECT * FROM livre order by titre");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_fournisseur()
    {
        // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par titre
        $r = $this->bd->prepare("SELECT * FROM fornisseur");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }
    public function get_all_localite()
    {
        // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par titre
        $r = $this->bd->prepare("SELECT DISTINCT localite FROM fornisseur");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_localite_list()
    {
        // Récupérer la valeur de localite choisie par l'utilisateur depuis le formulaire
        $localite = $_POST['localite'];

        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT * FROM fornisseur WHERE localite = '$localite'");
        // $r->bindValue(':localite', $localite, PDO::PARAM_STR);

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    //! PAYS
    public function get_all_pays()
    {
        // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par titre
        $r = $this->bd->prepare("SELECT DISTINCT pays FROM fornisseur");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_pays_list()
    {
        // Récupérer la valeur de localite choisie par l'utilisateur depuis le formulaire
        $pays = $_POST['pays'];

        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT * FROM fornisseur WHERE pays = '$pays'");
        // $r->bindValue(':localite', $localite, PDO::PARAM_STR);

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }
    //!TITRE
       //!TITRE
       public function get_all_titre()
       {
           // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par titre
           $r = $this->bd->prepare("SELECT DISTINCT titre FROM livre");
   
           // Exécuter la requête
           $r->execute();
   
           // Récupérer tous les résultats sous forme d'un tableau d'objets
           return $r->fetchAll(PDO::FETCH_OBJ);
       }
   
       public function get_all_titre_list()
       {
           // Récupérer la valeur de localite choisie par l'utilisateur depuis le formulaire
           $titre = $_POST['titre'];
   
           // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
           $r = $this->bd->prepare("SELECT * FROM livre WHERE titre = '$titre'");
           // $r->bindValue(':localite', $localite, PDO::PARAM_STR);
   
           // Exécuter la requête
           $r->execute();
   
           // Récupérer tous les résultats sous forme d'un tableau d'objets
           return $r->fetchAll(PDO::FETCH_OBJ);
       }

    //!AUTEUR
    public function get_all_auteur()
    {

        // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par titre
        $r = $this->bd->prepare("SELECT DISTINCT nomAuteur FROM livre");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_auteur_list()
    {
        // Récupérer la valeur de localite choisie par l'utilisateur depuis le formulaire
        $auteur = $_POST['nomAuteur'];

        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT * FROM livre WHERE nomAuteur = '$auteur'");
        // $r->bindValue(':localite', $localite, PDO::PARAM_STR);

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }
    //!EDITEUR
    public function get_all_editeur()
    {

        // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par titre
        $r = $this->bd->prepare("SELECT DISTINCT editeur FROM livre");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_editeur_list()
    {
        // Récupérer la valeur de localite choisie par l'utilisateur depuis le formulaire
        $editeur = $_POST['editeur'];

        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT * FROM livre WHERE editeur = '$editeur'");
        // $r->bindValue(':localite', $localite, PDO::PARAM_STR);

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }
    //!RAISON SOCIALE 
    public function get_all_raison_social()
    {

        // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par titre
        $r = $this->bd->prepare("SELECT DISTINCT raison_social FROM fornisseur");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_raison_social_list()
    {
        // Récupérer la valeur de localite choisie par l'utilisateur depuis le formulaire
        $raison_social = $_POST['raison_social'];
        //!L'erreur se produit car la requête SQL est interprétée comme si 'Marseille' était le nom de la colonne plutôt que la valeur de la colonne 'localite'. Cela peut se produire si la variable $localite dans la requête n'est pas correctement délimitée avec des guillemets simples ou doubles.
        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT * FROM fornisseur WHERE raison_social = '$raison_social'");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

}
