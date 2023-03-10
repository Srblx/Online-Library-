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

    public function get_connexion()
    {
        $email = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
        $password = filter_var($_POST['mdp'], FILTER_SANITIZE_STRING);

        if (!$email) {
            // L'adresse e-mail n'est pas valide, renvoyer un message d'erreur
            echo "<script>alert('L\'adresse e-mail n\'est pas valide');</script>";
            return;
        }

        $r = $this->bd->prepare("SELECT * FROM user WHERE mail=:email");
        $r->bindParam(':email', $email);
        $r->execute();
        $user = $r->fetch(PDO::FETCH_OBJ);

        // Vérifier si l'adresse e-mail existe dans la base de données
        if (!$user) {
            // L'adresse e-mail n'existe pas dans la base de données, renvoyer un message d'erreur
            echo "<script>alert('Cette adresse e-mail n\'est pas enregistrée, veuillez vous inscrire !');</script>";
            return;
        }

        // Vérifier si le mot de passe correspond à celui stocké dans la base de données
        if (!password_verify($password, $user->mdp)) {
            // Le mot de passe ne correspond pas à celui stocké dans la base de données, renvoyer un message d'erreur
            echo "<script>alert('Le mot de passe est incorrect !');</script>";
            return;
        }

        // Démarre la session pour stocker l'ID de l'utilisateur connecté
        session_start();
        $_SESSION['user_id'] = $user->id;

        return $user;
    }

    public function get_insert_user()
    {
        // Récupérer les données du formulaire
        $firstName = filter_var(trim($_POST['firstName']), FILTER_SANITIZE_STRING);
        $lastName = filter_var(trim($_POST['lastName']), FILTER_SANITIZE_STRING);
        $mail = filter_var(trim($_POST['mail']), FILTER_VALIDATE_EMAIL);
        $mdp = filter_var(trim($_POST['mdp']), FILTER_SANITIZE_STRING);

        // Vérifier si l'adresse e-mail existe déjà dans la base de données
        $r = $this->bd->prepare("SELECT COUNT(*) FROM `user` WHERE `mail` = :email");
        $r->bindParam(':email', $mail);
        $r->execute();
        $result = $r->fetchColumn();
        if ($result > 0) {
            // L'adresse e-mail existe déjà dans la base de données, renvoyer un message d'erreur
            echo "<script>alert('Cette adresse e-mail est déjà utilisée.');</script>";
            return;
        }

        // Hasher le mot de passe
        $mdp_hash = password_hash($mdp, PASSWORD_DEFAULT);

        // Préparer la requête SQL avec une jointure entre les tables commande et fournisseur
        $r = $this->bd->prepare("INSERT INTO `user`(`nom`, `prenom`, `mail`, `mdp`) VALUES (:nom,:prenom,:email,:pass)");
        $r->bindParam(':nom', $firstName);
        $r->bindParam(':prenom', $lastName);
        $r->bindParam(':email', $mail);
        $r->bindParam(':pass', $mdp_hash);
        // Exécuter la requête
        $r->execute();
    }
}
