<?php

class Commission{
    private $commissionId;
    private $clientId;
    private $artistId;
    private $categorie;
    private $description;
    private $avancement;
    private $prix;
    private $deadline;

    public function __construct($commissionId, $clientId, $artistId, $categorie, $description, $avancement, $prix, $deadline)
    {
        $this->commissionId = $commissionId;
        $this->clientId = $clientId;
        $this->artistId = $artistId;
        $this->categorie = $categorie;
        $this->description = $description;
        $this->avancement = $avancement;
        $this->prix = $prix;
        $this->deadline = $deadline;
    }

    public function getCommissionId()
    {
        return $this->commissionId;
    }

    public function setCommissionId($commissionId): void
    {
        $this->commissionId = $commissionId;
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function setClientId($clientId): void
    {
        $this->clientId = $clientId;
    }

    public function getArtistId()
    {
        return $this->artistId;
    }

    public function setArtistId($artistId): void
    {
        $this->artistId = $artistId;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie): void
    {
        $this->categorie = $categorie;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getAvancement()
    {
        return $this->avancement;
    }

    public function setAvancement($avancement): void
    {
        $this->avancement = $avancement;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }

    public function getDeadline()
    {
        return $this->deadline;
    }

    public function setDeadline($deadline): void
    {
        $this->deadline = $deadline;
    }
}