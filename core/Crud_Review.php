<?php
include 'config.php';
include 'C:\wamp64\www\artisons\entities\review.php'; //TODO fix absolute path

class Crud_Review {
  public static function select(){
    $sql = "SELECT * FROM `review`";
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
    $sql = "SELECT * FROM `review` WHERE id = ".$id;
    $db = config::getConnexion();
    try{
        $commission = $db->query($sql);
        return $commission;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
    public static function insert($review)
    {
        $sql = "INSERT INTO `review` (`id`, `lastName`, `name` , `text` , `date`) 
        VALUES (NULL, :lastName, :name, :text, NOW())";
        $db = config::getConnexion(); //appel fonction static sans new
        try{
            $req=$db->prepare($sql);
            $req->execute();
       
        $req->bindValue(":lastName", $review->getLastName());
        $req->bindValue(":name", $review->getName());
        $req->bindValue(":text", $review->getText());
        $req->bindValue(":date", $review->getDate());
        
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}
        

    public static function update($review)
    {
        $sql ="UPDATE `review` SET `lastName`= :lastName, `name`= :name, `text`= :text, `date`= :date WHERE `review`.`id`=:id ";
        $db = config::getConnexion(); 
        try{
        $req=$db->prepare($sql);
        $req->bindValue(":id", $review->getID());
        $req->bindValue(":lastName", $review->getLastName());
        $req->bindValue(":name", $review->getName());
        $req->bindValue(":text", $review->getText());
        $req->bindValue(":date", $review->getDate());
        

            $req->execute();
        
          }
          catch (Exception $e){
              echo 'Erreur: '.$e->getMessage();
          }
      }

        public static function delete($id)
        {
        $sql="DELETE FROM review where id=:id ";
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

        public static function listeReview()
        {
        $db = config::getConnexion();
        $sql = "SELECT * FROM review";
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