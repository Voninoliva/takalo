<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login_model extends CI_Model {
        
        public function getCorrespondingPersonne($email, $mdp) {
            $result=array();
            $this->load->helper('url');
            $this -> session;
            $sql="select*from personne where email like '%".$email."%' and mdp like '%".$mdp."%'";
            echo $sql;
            $query = $this->db->query($sql);
            $result = array();
            foreach($query -> result_array() as $row) {
                $result=$row;
            }
            return $result;
        }

        public function findPersonneByEmail($email) {
            $sql="select*from personne where email='%s'";
            $sql=sprintf($sql, $email);
            $query = $this->db->query($sql);
            $result = array();
            foreach($query -> result_array() as $row) {
                $result=$row;
            }
            return $result;
        }

        public function createUser($nom, $prenom, $adresse, $contact, $email, $mdp) {
            $sql="insert into personne values(default, '%s', '%s', '%s', '%s', '%s', '%s', 0)";
            $sql=sprintf($sql, $nom, $prenom, $adresse, $contact, $email, $mdp);
            $this->db->query($sql);
        }
    }
?>