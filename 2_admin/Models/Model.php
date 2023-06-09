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
        $r = $this->bd->prepare("SELECT * FROM livre");

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
        $localite = htmlspecialchars(trim($_POST['localite']));

        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT * FROM fornisseur WHERE localite = :localite");
        $r->bindValue(':localite', $localite, PDO::PARAM_STR);

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
        $pays = htmlspecialchars(trim($_POST['pays']));

        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT * FROM fornisseur WHERE pays = :pays");
        $r->bindValue(':pays', $pays, PDO::PARAM_STR);

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }
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
        $titre = htmlspecialchars(trim($_POST['titre']));

        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT * FROM livre WHERE titre = :titre");
        $r->bindValue(':titre', $titre, PDO::PARAM_STR);

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
        $auteur = htmlspecialchars(trim($_POST['nomAuteur']));

        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT * FROM livre WHERE nomAuteur = :auteur");
        $r->bindValue(':auteur', $auteur, PDO::PARAM_STR);

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
        $editeur = htmlspecialchars(trim($_POST['editeur']));

        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT * FROM livre WHERE editeur = :editeur");
        $r->bindValue(':editeur', $editeur, PDO::PARAM_STR);

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
        $raison_social = htmlspecialchars(trim($_POST['raison_social']));
        //!L'erreur se produit car la requête SQL est interprétée comme si 'Marseille' était le nom de la colonne plutôt que la valeur de la colonne 'localite'. Cela peut se produire si la variable $localite dans la requête n'est pas correctement délimitée avec des guillemets simples ou doubles.
        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT * FROM fornisseur WHERE raison_social = :raison_social");
        $r->bindValue(':raison_social', $raison_social, PDO::PARAM_STR);
        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    //!ADD LIVRE
    public function get_add_livre()
    {
        $isbn = !empty($_POST['isbn']) ? htmlspecialchars(trim($_POST['isbn'])) : 0;
        $titre = !empty($_POST['titre']) ? htmlspecialchars(trim($_POST['titre'])) : '';
        $theme = !empty($_POST['theme']) ? htmlspecialchars(trim($_POST['theme'])) : 'undefined';
        $nbPage = !empty($_POST['nbPage']) ? htmlspecialchars(trim($_POST['nbPage'])) : 0;
        $format = !empty($_POST['format']) ? htmlspecialchars(trim($_POST['format'])) : 'undefined';
        $nomAuteur = !empty($_POST['nomAuteur']) ? htmlspecialchars(trim($_POST['nomAuteur'])) : '';
        $prenomAuteur = !empty($_POST['prenomAuteur']) ? htmlspecialchars(trim($_POST['prenomAuteur'])) : '';
        $editeur = !empty($_POST['editeur']) ? htmlspecialchars(trim($_POST['editeur'])) : 'undefined';
        $anneeEdition = !empty($_POST['anneeEdition']) ? htmlspecialchars(trim($_POST['anneeEdition'])) : '0000-00-00';
        $prix = !empty($_POST['prix']) ? htmlspecialchars(trim($_POST['prix'])) : 0;
        $langue = !empty($_POST['langue']) ? htmlspecialchars(trim($_POST['langue'])) : 'undefined';

        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $stmt = $this->bd->prepare("INSERT INTO livre (isbn,titre,theme,nombreDePage,format,nomAuteur,PrenomAuteur,editeur,anneeEdition,prix,langue)
            VALUES (:isbn, :titre, :theme, :nbPage, :format, :nomAuteur, :prenomAuteur, :editeur, :anneeEdition, :prix, :langue)");

        // Lier les variables aux marqueurs
        $stmt->bindParam(":isbn", $isbn);
        $stmt->bindParam(":titre", $titre);
        $stmt->bindParam(":theme", $theme);
        $stmt->bindParam(":nbPage", $nbPage);
        $stmt->bindParam(":format", $format);
        $stmt->bindParam(":nomAuteur", $nomAuteur);
        $stmt->bindParam(":prenomAuteur", $prenomAuteur);
        $stmt->bindParam(":editeur", $editeur);
        $stmt->bindParam(":anneeEdition", $anneeEdition);
        $stmt->bindParam(":prix", $prix);
        $stmt->bindParam(":langue", $langue);

        // Exécuter la requête
        $stmt->execute();
    }

    // //! ADD FOURNISSEUR
    public function get_add_fournisseur()
    {
        $codeFournisseur = htmlspecialchars(trim($_POST['code_fournisseur']));
        $raisonSociale = htmlspecialchars(trim($_POST['raison_social']));
        $rueFournisseur = htmlspecialchars(trim($_POST['rue_fournisseur']));
        $codePostal = htmlspecialchars(trim($_POST['code_postal']));
        $localite = htmlspecialchars(trim($_POST['localite']));
        $pays = htmlspecialchars(trim($_POST['pays']));
        $telFournisseur = htmlspecialchars(trim($_POST['tel_fournisseur']));
        $urlInternet = htmlspecialchars(trim($_POST['url_fournisseur']));
        $mailFournisseur = htmlspecialchars(trim($_POST['mail_fournisseur']));
        $faxFournisseur = htmlspecialchars(trim($_POST['fax_fournisseur']));

        $stmt = $this->bd->prepare("INSERT INTO fornisseur (code_fournisseur, raison_social, rue_fournisseur, code_postal, localite, pays, tel_fournisseur, url_fournisseur, mail_fournisseur, fax_fournisseur)
    VALUES (:codeFournisseur, :raisonSocial, :rueFournisseur, :codePostal, :localite, :pays, :telFournisseur, :urlInternet, :mailFournisseur, :faxFournisseur)");

        $stmt->bindParam(':codeFournisseur', $codeFournisseur);
        $stmt->bindParam(':raisonSocial', $raisonSociale);
        $stmt->bindParam(':rueFournisseur', $rueFournisseur);
        $stmt->bindParam(':codePostal', $codePostal);
        $stmt->bindParam(':localite', $localite);
        $stmt->bindParam(':pays', $pays);
        $stmt->bindParam(':telFournisseur', $telFournisseur);
        $stmt->bindParam(':urlInternet', $urlInternet);
        $stmt->bindParam(':mailFournisseur', $mailFournisseur);
        $stmt->bindParam(':faxFournisseur', $faxFournisseur);

        // Exécuter la requête
        $stmt->execute();
    }

    // //! MODIFIER UNE LIGNE
    public function get_form_update($id)
    {
        // $id = $_GET['id'];
        $stmt = $this->bd->prepare("SELECT * FROM livre WHERE id = $id");
        $stmt->execute();
        return $stmt->fetch();
    }

    public function get_update_livre()
    {
        // Récupérer les données du formulaire
        $id = htmlspecialchars(trim($_POST['id']));
        $isbn = htmlspecialchars(trim($_POST['isbn']));
        $titre = htmlspecialchars(trim($_POST['titre']));
        $theme = htmlspecialchars(trim($_POST['theme']));
        $nbPage = htmlspecialchars(trim($_POST['nbPage']));
        $format = htmlspecialchars(trim($_POST['format']));
        $nomAuteur = htmlspecialchars(trim($_POST['nomAuteur']));
        $prenomAuteur = htmlspecialchars(trim($_POST['prenomAuteur']));
        $editeur = htmlspecialchars(trim($_POST['editeur']));
        $anneeEdition = htmlspecialchars(trim($_POST['anneeEdition']));
        $prix = htmlspecialchars(trim($_POST['prix']));
        $langue = htmlspecialchars(trim($_POST['langue']));

        // Mettre à jour les données dans la base de données
        $stmt = $this->bd->prepare("UPDATE livre SET isbn=:isbn, titre=:titre, theme=:theme, nombreDePage=:nbPage, format=:format, nomAuteur=:nomAuteur, prenomAuteur=:prenomAuteur, editeur=:editeur, anneeEdition=:anneeEdition, prix=:prix, langue=:langue WHERE id=:id");
        $stmt->bindParam(':isbn', $isbn);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':theme', $theme);
        $stmt->bindParam(':nbPage', $nbPage);
        $stmt->bindParam(':format', $format);
        $stmt->bindParam(':nomAuteur', $nomAuteur);
        $stmt->bindParam(':prenomAuteur', $prenomAuteur);
        $stmt->bindParam(':editeur', $editeur);
        $stmt->bindParam(':anneeEdition', $anneeEdition);
        $stmt->bindParam(':prix', $prix);
        $stmt->bindParam(':langue', $langue);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    //! DELETE 
    public function get_delete_livre($id)
    {
        $r = $this->bd->prepare("DELETE FROM livre WHERE id = :id");
        $r->bindParam(':id', $id);
        // Exécuter la requête
        $r->execute();
        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }


    //& PARTIE COMMANDE
    public function get_all_commande()
    {
        // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par titre
        $r = $this->bd->prepare("SELECT * FROM commande c 
        INNER join livre l ON c.id_livre = l.id 
        INNER JOIN fornisseur f ON c.id_fournisseur = f.id");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_all_date()
    {
        // Préparer la requête SQL pour sélectionner tous les livres dans l'ordre alphabétique par titre
        $r = $this->bd->prepare("SELECT * FROM commande c 
        INNER JOIN livre l ON c.id_livre = l.id
        INNER JOIN fornisseur f ON c.id_fournisseur = f.id");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_date_list()
    {
        // Récupérer la valeur de localite choisie par l'utilisateur depuis le formulaire
        $date = $_POST['date'];

        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT * FROM commande c 
        INNER JOIN livre l ON c.id_livre = l.id
        INNER JOIN fornisseur f ON c.id_fournisseur = f.id WHERE date_achat = :dateA");
        $r->bindValue(':dateA', $date, PDO::PARAM_STR);

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_nom_fournisseur()
    {
        $r = $this->bd->prepare("SELECT c.id_fournisseur, f.raison_social
        FROM commande c
        INNER JOIN fornisseur f ON c.id_fournisseur = f.id ;");

        $r->execute();

        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_nom_fournisseur_list($id)
    {
        $r = $this->bd->prepare("SELECT c.prix_achat,c.date_achat,c.numero_commande,c.nb_exemplaire,f.raison_social,l.titre,l.nomAuteur
        ,l.isbn FROM commande c
        INNER join livre l ON c.id_livre = l.id 
        INNER JOIN fornisseur f ON c.id_fournisseur = f.id WHERE c.id_fournisseur = :id ");
        $r->bindValue(':id', $id, PDO::PARAM_STR);
        $r->execute();

        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_titre_com()
    {
        // Préparer la requête SQL avec une jointure entre les tables commande et fornisseur
        $r = $this->bd->prepare("SELECT  c.id_livre, l.titre 
        FROM commande c 
        INNER JOIN livre l ON c.id_livre = l.id");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_titre_com_list($id)
    {
        // Préparer la requête SQL en utilisant une variable liée pour éviter les attaques par injection SQL
        $r = $this->bd->prepare("SELECT c.prix_achat,c.date_achat,c.numero_commande,c.nb_exemplaire,f.raison_social,l.titre,l.nomAuteur,l.isbn 
        FROM commande c
        INNER join livre l ON c.id_livre = l.id 
        INNER JOIN fornisseur f ON c.id_fournisseur = f.id WHERE c.id_livre = :id ");
        $r->bindValue(':id', $id, PDO::PARAM_STR);

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }



    public function get_add_titre()
    {
        // Préparer la requête SQL avec une jointure entre les tables commande et fornisseur
        $r = $this->bd->prepare("SELECT id, titre FROM livre order by titre");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_add_rsociale()
    {
        // Préparer la requête SQL avec une jointure entre les tables commande et fornisseur
        $r = $this->bd->prepare("SELECT  id, raison_social FROM fornisseur ");

        // Exécuter la requête
        $r->execute();

        // Récupérer tous les résultats sous forme d'un tableau d'objets
        return $r->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_add_commande($id_livre, $id_fournisseur, $date, $prix, $qte)
    {
        // Vérifier si le formulaire a été soumis
        if (isset($_POST['submit'])) {

            // Préparer la requête avec des paramètres sous forme de marqueurs de paramètres
            $r = $this->bd->prepare("INSERT INTO commande (id_livre, id_fournisseur, date_achat, prix_achat, nb_exemplaire) 
            VALUES (:id_livre, :id_fournisseur, :date_achat, :prix_achat, :nb_exemplaire)");

            // Lier les valeurs des paramètres à la requête SQL
            $r->bindParam(':id_livre', $id_livre);
            $r->bindParam(':id_fournisseur', $id_fournisseur);
            $r->bindParam(':date_achat', $date);
            $r->bindParam(':prix_achat', $prix);
            $r->bindParam(':nb_exemplaire', $qte);

            // Exécuter la requête
            $result = $r->execute();

            // Retourner le résultat de l'exécution de la requête
            return $result;

            // Rediriger vers la page de liste des commandes
            // header("Location: ?controller=commande&action=all_commande");
            // exit();
        }
    }
}
