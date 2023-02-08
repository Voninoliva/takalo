<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Verif.php");
class Affichage extends Verif{
    public function __construct()
    {
        parent::__construct();
    }
    public function seeAll(){
        $this->load->model('Rehetra');
        $data = array();
        $data['row'] = $this->Rehetra->getAll();
        $this->load->view('home',$data);
        $this->load->view('footer');

    }
    //partie2
    public function searchPage(){
        $this->load->model('Rehetra');
        $tab['all']=$this->Rehetra->getAllCat();
        $this->load->view('header');
        $this->load->view('recherche',$tab);
        $this->load->view('footer');
    }
    public function search(){
        $titre=$this->input->post('titre');
        $cat=$this->input->post('cat');
        $this->load->model('Rehetra');
        $tab['rehetra']=$this->Rehetra->recherche($titre,$cat);
        $tar['all']=$this->Rehetra->getAllCat();
         $this->load->view('header');
        $this->load->view('recherche',$tar);
         $this->load->view('detail',$tab);
         $this->load->view('footer');
    }
    public function detailObj($ido){
        $this->load->model('Rehetra');
        $tab['histo']=$this->Rehetra->getHistorique($ido);
        for($a=0;$a<count($tab['histo']);$a++){
            $tab['hPers']=$this->Rehetra->getHPers($tab['histo'][$a]['id']);
        }
        $tab['nowPers']=$this->Rehetra->getPersonne($ido);
        $tab['obj']=$this->Rehetra->getThisObject($ido);
        $this->load->view('objet',$tab);
        $this->load->view('footer');

    }
}


?>