<?php
namespace AppBundle\Entity;

class Login
{
    protected $gebruiker;

    public function __toString()
    {
        return $this->gebruiker;
    }

    public function getGebruiker()
    {
        return $this->gebruiker;
    }

    public function setGebruiker($gebruiker)
    {
        $this->gebruiker= $gebruiker;
    }


}