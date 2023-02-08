<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Connection extends CI_Controller{
    public function index(){
        $data=array();
        $data['titre']="inscription";
        $data['couleur']="pink";
        $this->load->view('inscription',$data);
    }
    public function inscription(){
        $nom=$this->input->get("nom");
        $prenom=$this->input->get("prenom");
        $mdp=$this->input->get("mdp");
        $mail=$this->input->get("mail");
        $this->load->model('Datas');
        $this->Datas->insert($nom,$prenom,$mdp,$mail);
        $this->session->set_userdata('andrana','avalue');
        $this->load->view('bienvenue');
    }
}

?>