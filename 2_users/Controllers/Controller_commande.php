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
    public function action_all_commandes()
    {
        $m = Model::get_model();
        $data = ["commande" => $m->get_all_commandes()];
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
        $m = Model::get_model();
        $data = ["date_list" => $m->get_all_date_list(), "date" => $m->get_all_date(),  "position" => 2];
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
        $m = Model::get_model();
        $data = ["nom_fournisseur_list" => $m->get_nom_fournisseur(), "position" => 2];
        $this->render("nom_fournisseur", $data);

    }

    //& COMMANDE PAR CLIENT 
    public function action_nom_client()
    {
        $m = Model::get_model();
        $data = ["nom_client" => $m->get_nom_client(), "position" => 1];
        $this->render("nom_client", $data);
    }
    
    public function action_nom_client_list()
    {
        $m = Model::get_model();
        $data = ["nom_client_list" => $m->get_nom_client(), "position" => 2];
        $this->render("nom_client", $data);
    
    }
}