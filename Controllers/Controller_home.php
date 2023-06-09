<?php

class Controller_home extends Controller
{
	//* L'action par défaut redirige vers l'action "home"
	public function action_default()
	{
		$this->action_home();
	}

	//* L'action "home" affiche la vue "home"
	public function action_home()
	{
	// Récupération des informations de cookie actuelles
	$params = session_get_cookie_params();

	// Expire le cookie en le réglant sur hier
	setcookie(session_name(), '', strtotime('-1 day'), $params['path'], $params['domain'], $params['secure'], $params['httponly']);

	// Détruit toutes les variables d'une session
	session_unset();

	// Destruction de la session
	session_destroy();

	$this->render("home");
	}

	public function action_sign_up()
	{
		$this->render("sign_up");
	}
}
