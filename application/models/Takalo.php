<?php
class Takalo extends CI_Model{
    public function echanger($ido1,$ido2){
        //le id1 le an le olona eto
        $req="insert into registre values(null,%d,%d,now(),0)";
        $req=sprintf($req,$this->db->escape($ido1),$this->db->escape($ido2));
        $this->db->query($req);
    }
    public function getAll($id){
        $req="select * from registre join objet on registre.idObjet1=objet.idObjet where accepte=0 and objet.idPersonne=%s";
        $req=sprintf($req,$id);
        $sql=$this->db->query($req);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
        }
        return $re;
    }
    public function getOFEMine($i){//maka an objet le atakalo anah
        $req="select * from objet join registre on objet.idObjet=registre.idObjet1 where idRegistre=%s";
        $req=sprintf($req,$i);
        $sql=$this->db->query($req);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
        }
        return $re;
    }
    public function getOFEOther($i){//maka ny objet an olona hafa
        $req="select * from objet join registre on objet.idObjet=registre.idObjet2 where idRegistre=%s";
        $req=sprintf($req,$i);
        $sql=$this->db->query($req);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
        }
        return $re;
    }
    public function accepte($id,$ido1,$ido2,$idp1,$idp2){
        $req="update registre set accepte=1 where idRegistre=%s";
        $req0="update objet set idPersonne=%s where idObjet=%s";
        $req1="update objet set idPersonne=%s where idObjet=%s";
        $req=sprintf($req,$this->db->escape($id));
        $this->db->query($req);
        $req0=sprintf($req0,$this->db->escape($idp1),$this->db->escape($ido1));
        $this->db->query($req0);
        $req1=sprintf($req1,$this->db->escape($idp2),$this->db->escape($ido2));
        $this->db->query($req1);
    }
    public function refus($idr){
        $req="delete from registre where idRegistre=%d";
        $req=sprintf($req,$this->db->escape($idr));
        $this->db->query($req);
    }
    //partie2
    public function statEchange(){
        //mety oe mila amboarina kely le requete
        $req="select catOb.*,count(id) from catOb";
        $sql=$this->db->query($req);
        $re=array();
        foreach($sql->result_array() as $row){
            $re[]=$row;
        }
        return $re[0];
    }
}

?>