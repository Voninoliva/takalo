<?php
class Gestion extends CI_Model{
    public function getMyAll($id){
        $req="select*from objet where idPersonne=%s";
        $req=sprintf($req,$this->db->escape($id));
        $sql=$this->db->query($req);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
        }
        return $re;
    }
    public function getOneObjet($id){
        $req="select*from objet where idObjet=%s";
        $req=sprintf($req,$this->db->escape($id));
        $sql=$this->db->query($req);
        $re=null;
        foreach($sql->result_array() as $row){
            $re=$row;
        }
        return $re;
    }
    public function add($id,$nom,$descri,$photo,$prix){
        $req="insert into objet values(null,%s,%s,%s,%s,%s)";
        $req=sprintf($req,$this->db->escape($id),$this->db->escape($nom),$this->db->escape($descri),$this->db->escape($photo),$this->db->escape($prix));
        $this->db->query($req);
    }
    public function modif($ido,$id,$nom,$descri,$photo,$prix){
        $req="update objet set nom=%s,descri=%s,photo=%s,prixestimatif=%s,idPersonne=%s where idObjet=%s";
        $req=sprintf($req,$this->db->escape($nom),$this->db->escape($descri),$this->db->escape($photo),$this->db->escape($prix),$this->db->escape($id),$this->db->escape($ido));
        $this->db->query($req);
    }
    public function delete($id){
        $req="delete from objet where idObjet=%s";
        $req=sprintf($req,$this->db->escape($id));
        $this->db->query($req);
    }
    function getTheNext(){
        $req="insert into photo values(null)";
        $this->db->query($req);
        $req="select * from photo order by id desc limit 1";
        $sql=$this->db->query($req);
        $re=0;
        foreach($sql->result_array() as $row){
            $re=$row['id'];
        }
        return $re;
    }
    function uploadPic($avatar){
                var_dump($_FILES[$avatar]);
                
                $fichier =$this->getTheNext();echo $fichier;
                $extension = strrchr($_FILES[$avatar]['name'], '.');
                if(!isset($erreur)) //S'il n'y a pas s'erreur, on upload
                {
                    if(move_uploaded_file( $_FILES[$avatar]['tmp_name'], 'assets/img/mine/'.$fichier.$extension)) 
                    {
                        return "mine/".$fichier.$extension;
                    }
                    else //Sinon (la fonction renvoie FALSE
                            echo "error";
                    }
                else
                {
                echo $erreur;
                } 
    }
    //partie2
    public function isAdmin($idp){
        $req="select*from personne where id=%s";
        $req=sprintf($req,$this->db->escape($idp));
        $sql=$this->db->query($req);
        $re=null;
        foreach($sql->result_array() as $row){
            $re=$row;
        }
        if($re['estAdmin']==1){
            return true;
        }
        return false;
    }
    public function statUser(){
        //mety oe mila amboarina kely le requete
        $req="select count(id),date from personne group by date asc";
        $sql=$this->db->query($req);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
            //mila amboarina kely le pozin le valiny apotra
        }
        return $re;
    }
}
?>