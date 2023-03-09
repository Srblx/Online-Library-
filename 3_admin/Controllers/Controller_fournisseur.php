<?php
class Controller_fournisseur extends Controller
{
    //* L'action par défaut redirige vers l'action "home"
    public function action_default()
    {
        $this->action_home();
    }

    //* L'action "home" affiche la vue "livre"
    public function action_home()
    {
        $this->render("fournisseur");
    }

    //* L'action "all_livres" récupère tous les livres via le modèle et les passe à la vue "all_livres"
    public function action_all_fournisseur()
    {
        $m = Model::get_model();
        $data = ["fournisseur" => $m->get_all_fournisseur()];
        $this->render("all_fournisseur", $data);
    }

    //* L'action "all_localite" récupère tous les livres via le modèle et les passe à la vue "all_localite"
    public function action_all_localite()
  
    {
        $m = Model::get_model();
        $data = ["localite" => $m->get_all_localite(), "position" => 1];
        $this->render("all_localite", $data);
    }

    public function action_all_localite_list()
    {
        $m = Model::get_model();
        $data = ["localite_list" => $m->get_all_localite_list(), "localite" => $m->get_all_localite(),  "position" => 2];
        $this->render("all_localite", $data);
    }

    public function action_all_pays()
    {
        $m = Model::get_model();
        $data = ["pays" => $m->get_all_pays(), "position" => 1];
        $this->render("all_pays", $data);
    }

    public function action_all_pays_list()
    {
        $m = Model::get_model();
        $data = ["pays_list" => $m->get_all_pays_list(), "pays" => $m->get_all_pays(),  "position" => 2];
        $this->render("all_pays", $data);
    }


    public function action_all_raison_social()
    {
        $m = Model::get_model();
        $data = ["raison_social" => $m->get_all_raison_social(), "position" => 1];
        $this->render("all_raison_social", $data);
    }

    public function action_all_raison_social_list()
    {
        $m = Model::get_model();
        $data = ["raison_social_list" => $m->get_all_raison_social_list(), "raison_social" => $m->get_all_raison_social(),  "position" => 2];
        $this->render("all_raison_social", $data);
    }

    public function action_add_fournisseur()
    {
        if(isset($_POST['submit'])){
            $m = Model::get_model();
            $m->get_add_fournisseur();
            $data = ["fournisseur" => $m->get_all_fournisseur()];
            $this->render("all_fournisseur", $data);
            } else {
                $this->render("add_fournisseur");
            }  
    }
}
