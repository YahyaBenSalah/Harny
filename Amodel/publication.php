<?php
	class Comment{
		private ?int $id ;
        private ?string $comment;

		function T__construct( $id, $comment){
			$this->id=$id;
            $this->comment = $comment;
		}
		function getId(){
			return $this->id;
		}
        function getComment(){
			return $this->comment;
		}

		function setId( $idalbum){
			$this->id=$idalbum;
		}
        function setComment( $images){
			$this->comment=$images;
		}
	}
?>