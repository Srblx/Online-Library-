<?php

class Controller_connexion extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }


    public function action_home()
    {
        $this->render("home");
    }

    public function action_sign_up()
    {
        $this->render("sign_up");
    }
    public function action_insert_user()
    {

        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $m->get_insert_user();
            $this->render("home");
            //header('Location : 3_admin/?controller=home&action=home');
        } else {
            $this->render("sign_up");
        }
    }

    public function action_connexion()
    {
        if (isset($_POST['submit'])) {
            $m = Model::get_model();
            $user = $m->get_connexion();

            if ($user) {
                $nom = $user->nom;
                $prenom = $user->prenom;
                $est_administrateur = $user->est_administrateur;
                if (session_status() != PHP_SESSION_ACTIVE) {
                    session_start();
                }
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['est_administrateur'] = $est_administrateur;
                if ($_SESSION['est_administrateur'] === 1) {
                    header('Location: 2_admin/?controller=home&action=home');
                } else {
                    header('Location: 1_users/?controller=home&action=home');
                    exit();
                }
                if (!$user) {
                    header('Location: ?controller=home&action=home');
                    exit();
                }
            }
            $this->render("home");
        }
    }
}
