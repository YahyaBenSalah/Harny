<?PHP
	include "../config.php";
	 require_once '../Model/post.php';

class postC
{
 public function afficherPost()
    {  $sql= " SELECT * FROM post" ; 
      $db = config ::getConnexion();
      try{
        $listepost = $db->query($sql);
        return $listepost ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

     public function ajouterPost($post)
    {
        $sql="INSERT INTO post (title,category,skills,price_min,price_max,description)
        values (:title,:category,:skills,:price_min,:price_max,:description)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'title'=>$post->getTitle(),
                'category'=>$post->getCategory(),
                'skills'=>$post->getSkills(),
                'price_min'=>$post->getPrice_min(),
                'price_max'=>$post->getPrice_max(),
                'description'=>$post->getDescription(),
                
            ]);
        }
        catch(Exeption $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimerPost($id)
    {
			$sql="DELETE FROM post WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
	}

    function modifierPost($post, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE post SET 
                    title = :title, 
                    category = :category,
                    skills = :skills,
                    price_min = :price_min,
                    price_max = :price_max,
                    description= :description
                WHERE id = :id'
            );
            $query->execute([
                'title' => $post->getTitle(),
                'category' => $post->getCategory(),
                'skills' => $post->getSkills(),
                'price_min' => $post->getPrice_min(),
                'price_max' => $post->getPrice_max(),
                'description' =>  $post -> getDescription(),
                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererPost($id){
        $sql="SELECT * from post where id=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $post=$query->fetch();
            return $post;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



    function rechercher($input,$colonne) {
        if($colonne == "all") 
        {        $sql = "SELECT * from post WHERE ( title LIKE \"%$input%\") OR ( category LIKE \"%$input%\") OR ( skills LIKE \"%$input%\") ";
       } else {
   $sql = "SELECT * from post WHERE ( $colonne LIKE \"%$input%\")  "; }
   $db = config::getConnexion();
   try { $liste=$db->query($sql); 
    

       return $liste;
   }
   catch (PDOException $e) {
       $e->getMessage();
   }


}


}
?>