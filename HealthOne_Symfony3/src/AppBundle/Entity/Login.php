<?php
namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="login")
 * @ORM\Embedded
 */
class Login
{
    /**
     *
     * @var string
     * @ORM\Column(name="username" , type="string" unique=true)
     * @Assert\NotBlank(message="Vul uw gebruikersnaam in")
     *
     */protected $username;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }
    /**
     * @var string
     * @ORM\Column(name="password" , "type="string")
     */
    protected $password;
}