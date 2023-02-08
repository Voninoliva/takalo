<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Verif.php");
class AccueilAdmin extends Verif {
	public function __construct()
    {
        parent::__construct();
    }
	public function index() {
        $this -> load -> model('GestionCategorie_model', 'Categorie');
        $nocategories=$this -> Categorie -> Categorie -> getAllObjetWithoutCategorie();
        $categories=$this -> Categorie -> Categorie -> getAllCategorie();
        $donnees=$this -> session -> userdata('Admin');
        $all=array();
        $all['donnees']=$donnees;
        $all['nocategories']=$nocategories;
        $all['categories']=$categories;
        $this -> load -> view('AccueilAdmin', $all);
		$this->load->view('footer');
	}		

	public function validerCategorie() {
		$this -> load -> model('GestionCategorie_model', 'Categorie');
		$idObjet=$this->input->post('idobjet');
		$categories=$this->input->post('categorie');
		$this -> Categorie -> validerCategorie($idObjet, $categories);
		$nocategories=$this -> Categorie -> Categorie -> getAllObjetWithoutCategorie();
        $categories=$this -> Categorie -> Categorie -> getAllCategorie();
        $all=array();
        $all['donnees']=$donnees;
        $all['nocategories']=$nocategories;
        $all['categories']=$categories;
		redirect('AccueilAdmin', $all);
	}

	public function insertCategorie() {
		$this -> load -> model('GestionCategorie_model', 'Categorie');
		$categories=$this->input->post('categorie');
		$this -> Categorie -> createCategorie($categories);
		$nocategories=$this -> Categorie -> Categorie -> getAllObjetWithoutCategorie();
        $categories=$this -> Categorie -> Categorie -> getAllCategorie();
        $all=array();
        $all['donnees']=$donnees;
        $all['nocategories']=$nocategories;
        $all['categories']=$categories;
		redirect('AccueilAdmin', $all);
	}
}

?>