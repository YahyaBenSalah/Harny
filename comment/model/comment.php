<?php 

class comment {

	private  $idcomment = null ;
	private  $auteur = null;
    private  $description =null; 

	function __construct( string $auteur, string $description ){
			
			$this->auteur=$auteur;
            $this->description=$description;
	
		}
		function getidcomment(): int{
			return $this->idcomment;
		}
		function getAuteur(): string{
			return $this->auteur;
		}
        function getDescription(): string{
            return $this->description;
        }


    	function setauteur(string $auteur): voidcomment{
			$this->auteur=$auteur;
		}
        function setdescription(string $description): voidcomment{
			$this->description=$description;
		}

}



?>