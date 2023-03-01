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
}
