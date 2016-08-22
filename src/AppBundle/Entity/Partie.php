<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partie
 *
 * @ORM\Table(name="partie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PartieRepository")
 */
class Partie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="partieName", type="string", length=100, unique=true)
     */
    private $partieName;

    /**
     * @var string
     *
     * @ORM\Column(name="terrain", type="string", length=255)
     */
    private $terrain;

    /**
     * @var string
     *
     * @ORM\Column(name="lienImage", type="string", length=255)
     */
    private $lienImage;

    /**
     * @var string
     *
     * @ORM\Column(name="etatPartie", type="string", length=255)
     */
    private $etatPartie;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreJoueurMax", type="integer", nullable=true)
     */
    private $nombreJoueurMax;

    /**
     * @var int
     *
     * @ORM\Column(name="nombreJoueurInscrit", type="integer", nullable=true)
     */
    private $nombreJoueurInscrit;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePartie", type="datetime")
     */
    private $datePartie;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set partieName
     *
     * @param string $partieName
     *
     * @return Partie
     */
    public function setPartieName($partieName)
    {
        $this->partieName = $partieName;

        return $this;
    }

    /**
     * Get partieName
     *
     * @return string
     */
    public function getPartieName()
    {
        return $this->partieName;
    }

    /**
     * Set terrain
     *
     * @param string $terrain
     *
     * @return Partie
     */
    public function setTerrain($terrain)
    {
        $this->terrain = $terrain;

        return $this;
    }

    /**
     * Get terrain
     *
     * @return string
     */
    public function getTerrain()
    {
        return $this->terrain;
    }

    /**
     * Set lienImage
     *
     * @param string $lienImage
     *
     * @return Partie
     */
    public function setLienImage($lienImage)
    {
        $this->lienImage = $lienImage;

        return $this;
    }

    /**
     * Get lienImage
     *
     * @return string
     */
    public function getLienImage()
    {
        return $this->lienImage;
    }

    /**
     * Set etatPartie
     *
     * @param string $etatPartie
     *
     * @return Partie
     */
    public function setEtatPartie($etatPartie)
    {
        $this->etatPartie = $etatPartie;

        return $this;
    }

    /**
     * Get etatPartie
     *
     * @return string
     */
    public function getEtatPartie()
    {
        return $this->etatPartie;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Partie
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set nombreJoueurMax
     *
     * @param integer $nombreJoueurMax
     *
     * @return Partie
     */
    public function setNombreJoueurMax($nombreJoueurMax)
    {
        $this->nombreJoueurMax = $nombreJoueurMax;

        return $this;
    }

    /**
     * Get nombreJoueurMax
     *
     * @return int
     */
    public function getNombreJoueurMax()
    {
        return $this->nombreJoueurMax;
    }

    /**
     * Set nombreJoueurInscrit
     *
     * @param integer $nombreJoueurInscrit
     *
     * @return Partie
     */
    public function setNombreJoueurInscrit($nombreJoueurInscrit)
    {
        $this->nombreJoueurInscrit = $nombreJoueurInscrit;

        return $this;
    }

    /**
     * Get nombreJoueurInscrit
     *
     * @return int
     */
    public function getNombreJoueurInscrit()
    {
        return $this->nombreJoueurInscrit;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Partie
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set datePartie
     *
     * @param \DateTime $datePartie
     *
     * @return Partie
     */
    public function setDatePartie($datePartie)
    {
        $this->datePartie = $datePartie;

        return $this;
    }

    /**
     * Get datePartie
     *
     * @return \DateTime
     */
    public function getDatePartie()
    {
        return $this->datePartie;
    }
}

