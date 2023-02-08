<?php
class Rehetra extends CI_Model{
    public function getAllObject($id){
        $req="select*from objet where idPersonne!=%s";
        $req=sprintf($req,$this->db->escape($id));
        $sql=$this->db->query($req);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
        }
        return $re;
    }

    public function getAllCat(){
        $req="select*from categorie";
        $sql=$this->db->query($req);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
        }
        return $re;
    }
     public function getInCat($idcat){
        $req="select objet.*  from catob join objet on catob.idObjet=objet.idObjet where idCat=%s";
        $req=sprintf($req,$this->db->escape($idcat));
        $sql=$this->db->query($req);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
        }
        return $re;
    }
    public function getPersonne($idO){
        $req="select personne.* from objet join personne on objet.idPersonne=personne.id where objet.idObjet=%s";
        $req=sprintf($req,$this->db->escape($idO));
        $sql=$this->db->query($req);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
        }
        return $re[0];
    }
   //partie2
   public function recherche($mot,$idcat){
    $req="select distinct objet.*,categorie.nom as categorie from catOb join objet on catOb.idObjet=objet.idObjet join categorie on catOb.idcategorie=categorie.idcategorie where objet.nom like  '%".$mot."%' and categorie.idcategorie=".$idcat;
    echo $req;
    $sql=$this->db->query($req);
    $re=array();
    foreach($sql->result_array() as $row){
        $re[]=$row;
    }
    return $re;
   }
   public function getHistorique($idob){
    $req="select personne.id,objet.*,catOb.date from objet";
    $req=$req." join personne on objet.idPersonne=personne.id join catOb on objet.idObjet=catOb.idObjet";
    $req=$req." where objet.idObjet=%s";
    $req=sprintf($req,$this->db->escape($idob));
    echo $req;
    $sql=$this->db->query($req);
    $re=array();
    foreach($sql->result_array() as $row){
        $re[]=$row;
    }
    return $re;
   }
   public function getHPers($idO){
    $req="select personne.* from  personne  where personne.id=%s";
    $req=sprintf($req,$this->db->escape($idO));
    $sql=$this->db->query($req);
    $re=array();
    foreach($sql->result_array() as $row){
        $re[]=$row;
    }
    return $re;
    }
    public function getThisObject($id){
        $req="select*from objet where idObjet=%s";
        $req=sprintf($req,$this->db->escape($id));
        $sql=$this->db->query($req);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
        }
        return $re[0];
    }
}

?>