<?php
class Datas extends CI_Model{
    public function insert($nom,$prenom,$mdp,$mail){
        $sql="insert into personne values(null,%s,%s,%s,%s)";
        $sql=sprintf($sql,$this->db->escape($nom),$this->db->escape($prenom),$this->db->escape($mdp),$this->db->escape($mail));
        $this->db->query($sql);
    }
}
    
?>