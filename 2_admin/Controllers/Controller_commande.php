<?php
class Controller_commande extends Controller
{
    //* L'action par défaut redirige vers l'action "home"
    public function action_default()
    {
        $this->action_home();
    }

    //* L'action "home" affiche la vue "livre"
    public function action_home()
    {
        $this->render("commande");
    }

    //& TOUTES LES COMMANDES
    public function action_all_commande()
    {
        $m = Model::get_model();
        $data = ["commande" => $m->get_all_commande()];
        $this->render("all_commande", $data);
    }

    //& COMMANDE PAR DATE 
    public function action_all_date()
    {
        $m = Model::get_model();
        $data = ["date" => $m->get_all_date(), "position" => 1];
        $this->render("all_date", $data);
    }

    public function action_all_date_list()
    {
        $id = $_POST['date'];

        $m = Model::get_model();
        $data = ["date_list" => $m->get_all_date_list($id), "date" => $m->get_all_date(),  "position" => 2];
        $this->render("all_date", $data);
    }


    //& COMMANDE PR FOURNISSEUR 
    public function action_all_nom_fournisseur()
    {
        $m = Model::get_model();
        $data = ["nom_fournisseur" => $m->get_nom_fournisseur(), "position" => 1];
        $this->render("nom_fournisseur", $data);
    }

    public function action_nom_fournisseur_list()
    {
        $id = $_POST['nom_fournisseur'];

        if (isset($_POST['nom_fournisseur'])) {
            $m = Model::get_model();
            $data = ["nom_fournisseur_list" => $m->get_nom_fournisseur_list($id), "nom_fournisseur" => $m->get_nom_fournisseur(), "position" => 2];
            $this->render("nom_fournisseur", $data);
        }
    }

    //& COMMANDE PAR titre_com 
    public function action_all_titre_com()
    {
        $m = Model::get_model();
        $data = ["titre_com" => $m->get_all_titre_com(), "position" => 1];
        $this->render("all_titre_com", $data);
    }

    public function action_all_titre_com_list()
    {
        $id = $_POST['titre_com'];
        // var_dump($id);
        if (isset($_POST['titre_com'])) {
            $m = Model::get_model();
            $data = ["titre_com_list" => $m->get_all_titre_com_list($id), "titre_com" => $m->get_all_titre_com(), "position" => 2];
            $this->render("all_titre_com", $data);
        }
    }

    public function action_add_commande()
    {
        $m = Model::get_model();
        $data = ["add_titre" => $m->get_add_titre(), "add_rsocial" => $m->get_add_rsociale()];
        $this->render("add_commande", $data);
    }

    public function action_add_commande_bd()
    {
        $m = Model::get_model();
        // Récupérer les valeurs soumises
        $id_livre = htmlspecialchars(trim($_POST["add_titre"]));
        $id_fournisseur = htmlspecialchars(trim($_POST["add_rsociale"]));
        $date = htmlspecialchars(trim($_POST['date']));
        $prix = htmlspecialchars(trim($_POST['prix']));

        // $date = date("Y-m-d"); // Date de soumission du formulaire
        $qte = $_POST["qte"];
        // var_dump($date);

        // $data = ["test" => $m->get_add_commande($id_livre, $id_fournisseur, $date, $prix, $qte)];
        // $this->render('all_commande');
        // $this->render('all_commande');
    }
}
