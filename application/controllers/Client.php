<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_controller {
	public function inscription() {
        $this -> load -> model('Login_model');
		if(count($this -> Login_model -> findPersonneByEmail($email))!=0) {
			redirect("LoginClient?erreur=Cet adresse email est deja utiliser");
		}
        $nom=$this->input->post('nom');
		$prenom=$this->input->post('prenom');
		$adresse=$this->input->post('adresse');
		$contact=$this->input->post('contact');
		$email=$this->input->post('email');
		$mdp=$this->input->post('mdp');
        $this -> Login_model -> createUser($nom, $prenom, $adresse, $contact, $email, $mdp);
		redirect('User/myobj');
	}		

    public function connexion() {
        $email=$this->input->post('email');
		$mdp=$this->input->post('mdp');
		$this->load->model('Login_model');
        $membre=$this -> Login_model -> getCorrespondingPersonne($email, $mdp);
		
        if(count($membre)==0) {
            redirect("LoginClient?erreur=Adresse email ou mot de passe invalide");
        }
		else{
			$this -> session -> set_userdata('Admin', $membre);
			redirect('affichage/seeAll');
		}
       
	}
}

?>