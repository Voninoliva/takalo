<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller{
    public function test_session(){
        $lavaleur=$this->session->userdata('andrana');
        echo $lavaleur;
    }
}
?>