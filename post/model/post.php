<?php 

class post {

	private  $id = null ;
	private  $title = null;
	private  $category= null;
	private  $skills= null;
	private  $price_min= null;
	private  $price_max = null;
    private  $description =null; 

	function __construct( string $title, string $category, string $skills, float $price_min, float $price_max, string $description ){
			
			$this->title=$title;
			$this->category=$category;
			$this->skills=$skills;
			$this->price_min=$price_min;
			$this->price_max=$price_max;
            $this->description=$description;
	
		}
		function getId(): int{
			return $this->id;
		}
		function getTitle(): string{
			return $this->title;
		}
		function getCategory(): string{
			return $this->category;
		}
		function getSkills(): string{
			return $this->skills;
		}
		function getPrice_min(): float{
			return $this->price_min;
		}
		function getPrice_max(): float{
			return $this->price_max;
		}
        function getDescription(): string{
            return $this->description;
        }


    	function settitle(string $title): void{
			$this->title=$title;
		}
		function setcategory(string $category): void{
			$this->category=$category;
		}
		function setskills(string $skills): void{
			$this->skills=$skills;
		}
		function setprice_min(float $price_min): void{
			$this->price_min=$price_min;
		}
		function setprice_max(float $price_max): void{
			$this->price_max=$price_max;
		}
        function setdescription(string $description): void{
			$this->description=$description;
		}


}



?>