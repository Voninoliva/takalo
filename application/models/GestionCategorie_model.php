<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class GestionCategorie_model extends CI_Model {

        public function createCategorie($nom) {
            $sql="insert into categorie values(default, '%s')";
            $sql=sprintf($sql, $nom);
            $this->db->query($sql);
        }
        
        public function validerCategorie($idObjet, $list_categorie) {
            $sql="insert into CatOb values(null,'%s', '%s',now())";
            $sql=sprintf($sql, $list_categorie, $idObjet);
            $this->db->query($sql);
        }

        // public function validerCategorie($idObjet, $list_categorie) {
        //     for($i=0; $i<count($list_categorie); $i++) {
        //         $sql="insert into CatOb values('%s', '%s)";
        //         $sql=sprintf($sql, $list_categorie[$i], $idObjet);
        //         $this->db->query($sql);
        //     }
        // }

        public function getAllObjetWithoutCategorie() {
            $sql="select*from objet where idObjet not in (select idObjet from CatOb)";
            $query=$this -> db -> query($sql);
            $result=array();
            foreach($query -> result_array() as $row) {
                $result[]=$row;
            }
            return $result;
        }

        public function getAllCategorie() {
            $sql="select*from categorie";
            $query=$this -> db -> query($sql);
            $result=array();
            foreach($query -> result_array() as $row) {
                $result[]=$row;
            }
            return $result;
        }
    }
?>