<?php

include 'C:\wamp64\www\artisons\entities\message.php'; 
//include '../entities/message.php';
include 'config.php';

class messageFns{
    public static function select(){
        $sql = "SELECT * FROM `messagerie`";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public static function selectOne($id){
        $sql = "SELECT * FROM `messagerie` WHERE id = ".$id;
        $db = config::getConnexion();
        try{
            $message = $db->query($sql);
            return $message;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public static function insert($message){
        $sql = "INSERT INTO `messagerie` (`id`, `id_client`, `id_artist`, `date_envoie`, `contenu`, `fichier_attache`) VALUES (NULL, :client_id, :artist_id, :date_envoie, :contenu, :fichier_attache)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':client_id',$message->getClientId());
            $req->bindValue(':artist_id',$message->getArtistId());
            $req->bindValue(':date_envoie',$message->getDateEnvoie());
            $req->bindValue(':contenu',$message->getContenu());
            $req->bindValue(':fichier_attache',$message->getFichierAttache());
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    public static function update($message){
        $sql = "UPDATE `messagerie` SET `id_client` = :client_id, `id_artist` = :artist_id, `date_envoie` = :date_envoie, `contenu` = :contenu, `fichier_attache` = :fichier_attache WHERE `messagerie`.`id` = :id ";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$message->getMessageId());
            $req->bindValue(':client_id',$message->getClientId());
            $req->bindValue(':artist_id',$message->getArtistId());
            $req->bindValue(':date_envoie',$message->getDateEnvoie());
            $req->bindValue(':contenu',$message->getContenu());
            $req->bindValue(':fichier_attache',$message->getFichierAttache());
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    public static function delete($id){
        $sql = "DELETE FROM `messagerie` WHERE `id` = :id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
}