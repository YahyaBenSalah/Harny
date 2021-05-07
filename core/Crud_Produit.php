<?php
include 'config.php';
include 'C:\wamp64\www\artisons\entities\produit.php'; //TODO fix absolute path

class Crud_Produit {
  public static function select(){
    $sql = "SELECT * FROM `produit`";
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
    $sql = "SELECT * FROM `produit` WHERE id = ".$id;
    $db = config::getConnexion();
    try{
        $commission = $db->query($sql);
        return $commission;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
    public static function insert($produit)
    {
        $sql = "INSERT INTO `produit` (`id`, `titre`, `description` , `categorie` , `id_artist`, `prix` , `image`, `artist`) 
        VALUES (NULL, :titre, :description, :categorie, :id_artist, :prix, :image, :artist)";
        $db = config::getConnexion(); //appel fonction static sans new
        try{
            $req=$db->prepare($sql);
            $req->execute();
       
        $req->bindValue(":titre", $Produit->getTitre());
        $req->bindValue(":description", $Produit->getDescription());
        $req->bindValue(":categorie", $Produit->getCategorie());
        $req->bindValue(":id_artist", $Produit->getId_Artist());
        $req->bindValue(":prix", $Produit->getPrix());
        $req->bindValue(":image", $Produit->getImage());
        $req->bindValue(":artist", $Produit->getArtist());
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}
        public static function archive($Produit,$id)
        {
        $db = config::getConnexion(); //appel fonction static sans new
        $sql = "INSERT INTO `produit_archive` (`ID`, `titre`, `description` , `categorie` , `id_artist`, `prix` ,`artist`) 
        SELECT `titre`, `description` , `categorie` , `id_artist`, `prix` ,`artist` FROM `produit` WHERE id = ".$id;        
        $req=$db->prepare($sql);

       

    }

    public static function update($produit)
    {
        $sql ="UPDATE `produit` SET `titre`= :titre, `description`= :description, `categorie`= :categorie, `id_artist`= :id_artist, `prix`= :prix, `image`= :image, `artist`= :artist WHERE `produit`.`id`=:id ";
        $db = config::getConnexion(); 
        try{
        $req=$db->prepare($sql);
        $req->bindValue(":id", $produit->getID());
        $req->bindValue(":titre", $produit->getTitre());
        $req->bindValue(":description", $produit->getDescription());
        $req->bindValue(":categorie", $produit->getCategorie());
        $req->bindValue(":id_artist", $produit->getId_Artist());
        $req->bindValue(":prix", $produit->getPrix());
        $req->bindValue(":image", $produit->getImage());
        $req->bindValue(":artist", $produit->getArtist());

            $req->execute();
        
          }
          catch (Exception $e){
              echo 'Erreur: '.$e->getMessage();
          }
      }

        public static function delete($id)
        {
        $sql="DELETE FROM produit where id=:id ";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
          $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }

        public static function listeProduit()
        {
        $db = config::getConnexion();
        $sql = "SELECT * FROM produit";
        $result = $db->query($sql); /*query pour la lecture seulement */
        try{
            $result = $db->query($sql);
        return $result;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

        }
    }
?>