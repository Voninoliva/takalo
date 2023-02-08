<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("Verif.php");
class Echange extends Verif{
    public function __construct()
    {
        parent::__construct();
    }
    //partie2
    public function statEchange(){
        $this->load->model('Takalo');
        $tab['all']=$this->Takalo->statEchange();
        $tab['titre']="Statistique du nombre d'échange effectué";
        $this->load->view('statChart',$tab);
        $this->load->view('footer');
    }
    public function propositions(){
        //mila an le session personne
        $this->load->model('Takalo');
        $this->load->model('Rehetra');
        $tab['all']=$this->Takalo->getAll(1);
       for($i=0;$i<count($tab['all']);$i++){
        $tab['o1'][]=$this->Takalo->getOFEMine($tab['all'][$i]['idRegistre']);
        $tab['p1'][]=$this->Rehetra->getThisObject($tab['o1'][$i]);
        $tab['o2'][]=$this->Takalo->getOFEMine($tab['all'][$i]['idRegistre']);
        $tab['p2'][]=$this->Rehetra->getThisObject($tab['o2'][$i]);
    }
       $this->load->view('invitation',$tab);
       $this->load->view('footer');
    }
}
?>