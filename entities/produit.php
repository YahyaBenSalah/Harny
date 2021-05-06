<?php
class Produit
{

private $id;
private $titre;
private $description;
private $categorie;
private $id_artist;
private $prix;
private $image;
private $artist;

    public function __construct($id, $titre, $description, $categorie, $id_artist, $prix, $image, $artist)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->categorie = $categorie ;       
        $this->id_artist = $id_artist;
        $this->prix = $prix;
        $this->image = $image;
        $this->artist = $artist;
    }
    
    public function getID()
    {
        return $this->id;
    }


    public function setID($id)
    {
        $this->id = $id;
    }

      public function getTitre()
    {
        return $this->titre;
    }


    public function setTitre($titre)
    {
        $this->titre = $titre;
    }


      public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }


    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    public function getId_Artist()
    {
        return $this->id_artist;
    }


    public function setId_Artist($id_artist)
    {
        $this->id_artist = $id_artist;
    }

    public function getPrix()
    {
        return $this->prix;
    }


    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    
    public function getImage()
    {
        return $this->image;
    }


    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getArtist()
    {
        return $this->artist;
    }


    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

}
?>