<?php

class message{
    private $messageId;
    private $clientId;
    private $artistId;
    private $dateEnvoie;
    private $contenu;
    private $fichierAttache;

    public function __construct($messageId, $clientId, $artistId, $dateEnvoie, $contenu, $fichierAttache)
    {
        $this->messageId = $messageId;
        $this->clientId = $clientId;
        $this->artistId = $artistId;
        $this->dateEnvoie = $dateEnvoie;
        $this->contenu = $contenu;
        $this->fichierAttache = $fichierAttache;
    }

    public function getMessageId()
    {
        return $this->messageId;
    }

    public function setMessageId($messageId): void
    {
        $this->messageId = $messageId;
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

    public function getDateEnvoie()
    {
        return $this->dateEnvoie;
    }

    public function setDateEnvoie($dateEnvoie): void
    {
        $this->dateEnvoie = $dateEnvoie;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu): void
    {
        $this->contenu = $contenu;
    }

    public function getFichierAttache()
    {
        return $this->fichierAttache;
    }

    public function setFichierAttache($fichierAttache): void
    {
        $this->fichierAttache = $fichierAttache;
    }

    
}
   

