<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('connection');
		
	}	
	public function verify(){
		$this->load->model('Datas');
		$d=$this->Datas->dataa();
		$nom=$this->input->get("nom");
		$mdp=$this->input->get("mdp");
		if($nom==$d['nom'] && $mdp==$d['mdp']){
			$this->load->view('bienvenue',$d);
		}
		else{
			$this->load->view('connection');
		}
	}
	
}
