<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Affichage extends CI_Controller{
    public function seeAll(){
        $this->load->model('Rehetra');
        $tab['all']=$this->Rehetra->getAllObject(1);
        $this->load->view('header');
        $this->load->view('acc',$tab);

    }
    //partie2
    public function searchPage(){
        $this->load->model('Rehetra');
        $tab['all']=$this->Rehetra->getAllCat();
        $this->load->view('header');
        $this->load->view('recherche',$tab);
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
    }
    public function detailObj($ido){
        $this->load->model('Rehetra');
        $tab['histo']=$this->Rehetra->getHistorique($ido);
        for($a=0;$a<count($tab['histo']);$a++){
            $tab['hPers']=$this->Rehetra->getHPers($tab['histo'][$a]['id']);
        }
        $tab['nowPers']=$this->Rehetra->getPersonne($ido);
        $tab['obj']=$this->Rehetra->getThisObject($ido);
        $this->load->view('header');
        $this->load->view('objet',$tab);

    }
}


?>