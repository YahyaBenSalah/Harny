<?php
include "../connexion.php";
include "C:/xampp/htdocs/try/config.php";
require_once 'C:/xampp/htdocs/try/model/comment.php';
class CommentC{

      public function ajouter($comment){
		
			$sql="INSERT INTO comment (id,comment) 
			VALUES (:id , :comment)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->bindValue(':id', $comment->getId());
				$query->bindValue(':comment', $comment->getComment());
		
				$query->execute(); 
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
    }
	public function modifierAlbum($comment,$id)
	{
	try 
			{
				$bd = config::getConnexion();
				$query = $bd->prepare('UPDATE comment SET  comment= :comment WHERE id= :id;');
				echo "passa" . $comment->getComment();
				echo "catcouta" . $id; 	
			$query->execute
			([
				'comment' => $comment->getComment(),
				'id' => $id ,
			]);
	
	
			echo $query->rowCount() . " records UPDATED successfully <br>";
			} 
			catch (PDOException $E)
			{
				$E->getMessage();
			}
	}	
	public function affichercomment()
	{   $sql="SELECT * FROM comment;";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			while ($row = $liste->fetch()) {
				
				echo $row['nom']."<br>";
			}
			return $liste;
		}
		catch (Exception $e)
		{
			die('Erreur: '.$e->getMessage());
		}	

}


?>
