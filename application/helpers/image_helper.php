<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('uploadPic')) {
    function uploadPic($avatar){
        echo $avatar;
                // var_dump($_FILES['avatar']);
                $fichier = basename($_FILES[$avatar]['name']);
                $taille_maxi = 100000;
                $taille = filesize($_FILES[$avatar]['tmp_name']);
                $extensions = array('.png', '.gif', '.jpg', '.jpeg');
                $extension = strrchr($_FILES[$avatar]['name'], '.');
                // var_dump($_FILES[$avatar]);
                //Début des vérifications de sécurité...
                // if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
                // {
                // $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc';
                // }
                // if($taille>$taille_maxi)
                // {
                // $erreur = 'Le fichier est trop gros...';
                // }
                if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
                {
                //On formate le nom du fichier ici...
                $fichier = strtr($fichier,
                'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
                'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);//$dossier . $fichier
                    if(move_uploaded_file( $_FILES[$avatar]['tmp_name'], base_url('assets/img/mine/').$fichier )) 
                    {
                        return "assets/img/".$fichier;
                    }
                    else //Sinon (la fonction renvoie FALSE
                            echo "error";
                    }
                else
                {
                echo $erreur;
                } 
        }
    
     }
     if ( ! function_exists('all_pics')) {
        function all_pics($un,$deux){
            $rep=$un.",".$deux;
            return $rep;
            }
     }
     if ( ! function_exists('getAllPic')) {
        function getAllPic($a){
            $e=array();
            $e=explode(",",$a);
            //  var_dump($e);
            return $e;
        }
     }

?>