<?php
class Controller_titre extends Controller
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
    public function action_all_titre()
    {
        $m = Model::get_model();
        $data = ["titre" => $m->get_all_titre()];
        $this->render("all_titre", $data);
    }
}
