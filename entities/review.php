<?php
class Review
{

private $id;
private $lastName;
private $name;
private $text;
private $date;

    public function __construct($id, $lastName, $name, $text, $date)
    {
        $this->id = $id;
        $this->lastName = $lastName;
        $this->name = $name;
        $this->text = $text ;       
        $this->date = $date ;       
    }
    
    public function getID()
    {
        return $this->id;
    }
    public function setID($id)
    {
        $this->id = $id;
    }

      public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }


      public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getText()
    {
        return $this->text;
    }
    public function setText($text)
    {
        $this->text = $text;
    }

    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }

}
?>