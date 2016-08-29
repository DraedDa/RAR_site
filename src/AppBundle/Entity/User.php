<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

    // /**
    // * @ORM\nom
    // * @var string
    // *
    // * @ORM\Column(name="nom", type="string", length=80)
    // */
    //  protected $nom;
   
    // /**
    // * @ORM\prenom
    // * @var string
    // *
    // * @ORM\Column(name="prenom", type="string", length=80)
    // */
    //  protected $prenom;

    // /**
    // * @ORM\phone
    // * @var string
    // *
    // * @ORM\Column(name="phone", type="string", length=80)
    // */
    //  protected $phone;

    public function __construct()
    {
        parent::__construct();
        
    }

    
    
    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->setPrenom = $prenom;

        return $this;
    }
    
    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($Nom)
    {
        $this->setNom = $Nom;

        return $this;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->setphone = $phone;

        return $this;
    }
}