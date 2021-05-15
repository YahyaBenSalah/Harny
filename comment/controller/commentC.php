<?PHP
	include "../../comment/config1.php";
	require_once '../../comment/Model/comment.php';

class commentC
{
 public function afficherComment()
    {  $sql= " SELECT * FROM comment" ; 
      $db = config1 ::getConnexion();
      try{
        $listecomment = $db->query($sql);
        return $listecomment ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

     public function ajouterComment($comment)
    {
        $sql="INSERT INTO comment (auteur,description)
        values (:auteur,:description)";
        $db=config1::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'auteur'=>$comment->getAuteur(),
                'description'=>$comment->getDescription(),
                
            ]);
        }
        catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerComment($idcomment)
    {
			$sql="DELETE FROM comment WHERE idcomment= :idcomment";
			$db = config1::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idcomment',$idcomment);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
	}

    function modifierComment($comment, $idcomment){
        try {
            $db = config1::getConnexion();
            $query = $db->prepare(
                'UPDATE comment SET 
                    auteur = :auteur, 
                    description= :description
                WHERE idcomment = :idcomment'
            );
            $query->execute([
                'auteur' => $comment->getAuteur(),
                'description' =>  $comment -> getDescription(),
                'idcomment' => $idcomment
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererComment($idcomment){
        $sql="SELECT * from comment where idcomment=$idcomment";
        $db = config1::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $comment=$query->fetch();
            return $comment;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



    function rechercher($input,$colonne) {
        if($colonne == "all") 
        {        $sql = "SELECT * from comment WHERE ( auteur LIKE \"%$input%\") ";
       } else {
   $sql = "SELECT * from comment WHERE ( $colonne LIKE \"%$input%\")  "; }
   $db = config1::getConnexion();
   try { $liste=$db->query($sql); 
    

       return $liste;
   }
   catch (PDOException $e) {
       $e->getMessage();
   }


}


}
?>