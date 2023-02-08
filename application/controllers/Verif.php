<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Verif extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->has_userdata('Admin')==true){
            $membre=$this->session->userdata('Admin');
           
            if($membre['estAdmin']=='0'){
                $this->load->view('header');
            }
            else{
                $this->load->view('headerAdmin');
            }
        }
        else{
            redirect('LoginClient');
        }
    }
}
?>