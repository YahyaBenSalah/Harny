<?php

include 'C:\wamp64\www\artisons\entities\Commission.php'; //TODO fix absolute path
//include '../entities/Commission.php';
include 'config.php';

class CommissionFns{
    public static function select(){
        $sql = "SELECT * FROM `commissions`";
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
        $sql = "SELECT * FROM `commissions` WHERE id = ".$id;
        $db = config::getConnexion();
        try{
            $commission = $db->query($sql);
            return $commission;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public static function insert($commission){
        $sql = "INSERT INTO `commissions` (`id`, `client_id`, `artist_id`, `categorie`, `description`, `avancement`, `prix`, `deadline`) VALUES (NULL, :client_id, :artist_id, :categorie, :description, :avancement, :prix, :deadline)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':client_id',$commission->getClientId());
            $req->bindValue(':artist_id',$commission->getArtistId());
            $req->bindValue(':categorie',$commission->getCategorie());
            $req->bindValue(':description',$commission->getDescription());
            $req->bindValue(':avancement',$commission->getAvancement());
            $req->bindValue(':prix',$commission->getPrix());
            $req->bindValue(':deadline',$commission->getDeadline());
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    public static function update($commission){
        $sql = "UPDATE `commissions` SET `client_id` = :client_id, `artist_id` = :artist_id, `categorie` = :categorie, `description` = :description, `avancement` = :avancement, `prix` = :prix, `deadline` = :deadline WHERE `commissions`.`id` = :id ";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$commission->getCommissionId());
            $req->bindValue(':client_id',$commission->getClientId());
            $req->bindValue(':artist_id',$commission->getArtistId());
            $req->bindValue(':categorie',$commission->getCategorie());
            $req->bindValue(':description',$commission->getDescription());
            $req->bindValue(':avancement',$commission->getAvancement());
            $req->bindValue(':prix',$commission->getPrix());
            $req->bindValue(':deadline',$commission->getDeadline());
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    public static function delete($id){
        $sql = "DELETE FROM `commissions` WHERE `id` = :id";
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