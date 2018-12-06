<?php
/**
 * Created by PhpStorm.
 * User: Sem
 * Date: 6-12-2018
 * Time: 12:02
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="patient")
 */
class Patient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $klantnummer;
    /**
     * @ORM\Column(type="string")
     */
    protected $voornaam;
    /**
     * @ORM\Column(type="string")
     */
    protected $tussenvoegsel;
    /**
     * @ORM\Column(type="string")
     */
    protected $achternaam;
    /**
     * @ORM\Column(type="string")
     */
    protected $straatnaam;
    /**
     * @ORM\Column(type="string")
     */
    protected $huisnummer;
    /**
     * @ORM\Column(type="string")
     */
    protected $postcode;
    /**
     * @ORM\Column(type="string")
     */
    protected $plaats;

    /**
     * @ORM\Column(type="string")
     */
    protected $telefoon_nummer;
    /**
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getKlantnummer()
    {
        return $this->klantnummer;
    }

    /**
     * @param mixed $klantnummer
     */
    public function setKlantnummer($klantnummer): void
    {
        $this->klantnummer = $klantnummer;
    }

    /**
     * @return mixed
     */
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * @param mixed $voornaam
     */
    public function setVoornaam($voornaam): void
    {
        $this->voornaam = $voornaam;
    }

    /**
     * @return mixed
     */
    public function getTussenvoegsel()
    {
        return $this->tussenvoegsel;
    }

    /**
     * @param mixed $tussenvoegsel
     */
    public function setTussenvoegsel($tussenvoegsel): void
    {
        $this->tussenvoegsel = $tussenvoegsel;
    }

    /**
     * @return mixed
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * @param mixed $achternaam
     */
    public function setAchternaam($achternaam): void
    {
        $this->achternaam = $achternaam;
    }

    /**
     * @return mixed
     */
    public function getStraatnaam()
    {
        return $this->straatnaam;
    }

    /**
     * @param mixed $straatnaam
     */
    public function setStraatnaam($straatnaam): void
    {
        $this->straatnaam = $straatnaam;
    }

    /**
     * @return mixed
     */
    public function getHuisnummer()
    {
        return $this->huisnummer;
    }

    /**
     * @param mixed $huisnummer
     */
    public function setHuisnummer($huisnummer): void
    {
        $this->huisnummer = $huisnummer;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getPlaats()
    {
        return $this->plaats;
    }

    /**
     * @param mixed $plaats
     */
    public function setPlaats($plaats): void
    {
        $this->plaats = $plaats;
    }

    /**
     * @return mixed
     */
    public function getTelefoonNummer()
    {
        return $this->telefoon_nummer;
    }

    /**
     * @param mixed $telefoon_nummer
     */
    public function setTelefoonNummer($telefoon_nummer): void
    {
        $this->telefoon_nummer = $telefoon_nummer;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }
}