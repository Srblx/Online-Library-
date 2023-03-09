<?php

class Controller_livre extends Controller
{
    //* L'action par défaut redirige vers l'action "home"
    public function action_default()
    {
        $this->action_home();
    }

    //* L'action "home" affiche la vue "livre"
    public function action_home()
    {
        $this->render("livre");
    }

    //* L'action "all_livres" récupère tous les livres via le modèle et les passe à la vue "all_livres"
    public function action_all_livres()
    {
        $m = Model::get_model();
        $data = ["livres" => $m->get_all_livres()];
        $this->render("all_livres", $data);
    }


    public function action_all_titre()
    {
        $m = Model::get_model();
        $data = ["titre" => $m->get_all_titre(),  "position" => 1];
        $this->render("all_titre", $data);
    }

    public function action_all_titre_list()
    {
        $m = Model::get_model();
        $data = ["titre_list" => $m->get_all_titre_list(), "titre" => $m->get_all_titre(),  "position" => 2];
        $this->render("all_titre", $data);
    }


    public function action_all_auteur()
    {
        $m = Model::get_model();
        $data = ["auteur" => $m->get_all_auteur(), "position" => 1];
        $this->render("all_auteur", $data);
    }

    public function action_all_auteur_list()
    {
        $m = Model::get_model();
        $data = ["auteur_list" => $m->get_all_auteur_list(), "auteur" => $m->get_all_auteur(),  "position" => 2];
        $this->render("all_auteur", $data);
    }

    public function action_all_editeur()
    {
        $m = Model::get_model();
        $data = ["editeur" => $m->get_all_editeur(), "position" => 1];
        $this->render("all_editeur", $data);
    }

    public function action_all_editeur_list()
    {
        $m = Model::get_model();
        $data = ["editeur_list" => $m->get_all_editeur_list(), "editeur" => $m->get_all_editeur(),  "position" => 2];
        $this->render("all_editeur", $data);
    }

    function action_add_livre()
    {
        // $data = [];
        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $m->get_add_livre();
            $data = ["livres" => $m->get_all_livres()];
            $this->render("all_livres", $data);
        } else {
            $this->render("add_livre");
        }
    }

    public function action_update_livre()
    {
        if (isset($_GET['id'])) {
            // recup livre correspondant à l'ID
            $id = $_GET['id'];
            $m = Model::get_model();
            $data = ["livre" => $m->get_form_update($id)];
            $this->render("update_livre", $data);
        }
        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $m->get_update_livre();
            $data = ["livres" => $m->get_all_livres()];
            $this->render("all_livres", $data);
        }
    }

    public function action_delete_livre()
    {
        $id = $_GET['id'];
        $m = Model::get_model();

        $m->get_delete_livre($id);

        $livres = $m->get_all_livres();

        // render view "all_livres" en lui passant la liste des livres mise à jour
        $data = ['livres' => $livres];
        $this->render("all_livres", $data);
    }



    // public function action_uptdate()
    // {
    // // Vérifier si des données ont été soumises via POST
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $id = $_GET['id'];
    //     $m = Model::get_model();

    //     // Appeler la méthode update_livre() du modèle pour mettre à jour les informations du livre dans la base de données
    //     $m->update_livre($_POST['isbn'], $_POST['titre'], $_POST['theme'], $_POST['nbPage'], $_POST['format'], $_POST['nomAuteur'], $_POST['prenomAuteur'], $_POST['editeur'], $_POST['anneeEdition'], $_POST['prix'], $_POST['langue']);

    //     // Rediriger l'utilisateur vers la liste de tous les livres
    //     //! header("Location: index.php?action=all_livre");
    //     exit();
    // } else {
    //     // Si aucune donnée n'a été soumise, afficher le formulaire de modification de livre avec les informations actuelles du livre
    //     $id = $_GET['id'];
    //     $m = Model::get_model();
    //     $row = $m->get_livre_by_id($id);
    //     $data = ["update_livre" => $row];
    //     $this->render("update_livre", $data);
    // }
    // }

}
