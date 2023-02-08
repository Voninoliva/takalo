<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{
    public function myObj(){
        $idPersonne=5;
        $this->load->model('Gestion');
        $all=$this->Gestion->getMyAll($idPersonne);
        $this->load->view('header');
        $tab['all']=$all;
        $this->load->view('user_objet',$tab);
    }
    public function formAddObj(){
        $this->load->view('formulaireAdd');
    }
    public function formModif($obj=""){
        $this->load->model('Gestion');
        $oneObjet=$this->Gestion->getOneObjet($obj);
        $this->load->view('formulaireModif',$oneObjet);
    }
    public function addObj(){
        $this->load->model('Gestion');
        $this->session->set_userdata('idPersonne',1);
        $a=$this->session->userdata('idPersonne');
        $nom=$this->input->post('nom');
        $descri=$this->input->post('descri');
        $file=$this->Gestion->uploadPic("a0");
        $prix=$this->input->post('prix');
        $this->Gestion->add($a,$nom,$descri,$file,$prix);
       redirect('user/myObj');
    }
    public function update(){
        $this->load->model('Gestion');
        $this->session->set_userdata('idPersonne',1);
        $a=$this->session->userdata('idPersonne');
        $nom=$this->input->post('nom');
        $ob=$this->input->post('idOb');
        $descri=$this->input->post('descri');
        $file=$this->Gestion->uploadPic("a0");
        $prix=$this->input->post('prix');
        $this->Gestion->modif($ob,$a,$nom,$descri,$file,$prix);
       redirect('user/myObj');
    }
    public function delete($a=''){
        $this->load->model('Gestion');
        $this->Gestion->delete($a);
        redirect('user/myObj');
    }
    public function statUser(){
        $this->load->model('Gestion');
        $tab['all']=$this->Gestion->statUser();
        $tab['titre']="Statistique du nombre d'utilisateur";
        $this->load->view('statChart',$tab);
    }
}
?>