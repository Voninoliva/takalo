<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginClient extends CI_Controller {

	public function index() {
		$tab['erreur']=$this -> input -> get('erreur');
		$tab['page']='Client/connexion';
        $this -> load -> view('connexion', $tab);
	}		
	public function inscription() {
		$this -> load -> view('inscription');
	}
}

?>