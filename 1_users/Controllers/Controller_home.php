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

	$this->render("home");
	}
}
