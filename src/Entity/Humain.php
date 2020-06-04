<?php

namespace App\Entity;

use App\Repository\HumainRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=HumainRepository::class)
 */
class Humain
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $Pseudo;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $Mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Url()
     */
    private $Facebook;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Url(
     *    message = "The url '{{ value }}' is not a valid url",
     * )
     */
    private $Twitter;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Url()
     */
    private $Insta;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Url()
     */
    private $Linkedin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Statut;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Inscrit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(?string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(?string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->Pseudo;
    }

    public function setPseudo(?string $Pseudo): self
    {
        $this->Pseudo = $Pseudo;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->Mail;
    }

    public function setMail(?string $Mail): self
    {
        $this->Mail = $Mail;

        return $this;
    }

    public function getFacebook(): ?string
    {
        return $this->Facebook;
    }

    public function setFacebook(?string $Facebook): self
    {
        $this->Facebook = $Facebook;

        return $this;
    }

    public function getTwitter(): ?string
    {
        return $this->Twitter;
    }

    public function setTwitter(?string $Twitter): self
    {
        $this->Twitter = $Twitter;

        return $this;
    }

    public function getInsta(): ?string
    {
        return $this->Insta;
    }

    public function setInsta(?string $Insta): self
    {
        $this->Insta = $Insta;

        return $this;
    }

    public function getLinkedin(): ?string
    {
        return $this->Linkedin;
    }

    public function setLinkedin(?string $Linkedin): self
    {
        $this->Linkedin = $Linkedin;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(?string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->Statut;
    }

    public function setStatut(?string $Statut): self
    {
        $this->Statut = $Statut;

        return $this;
    }

    public function getInscrit(): ?bool
    {
        return $this->Inscrit;
    }

    public function setInscrit(?bool $Inscrit): self
    {
        $this->Inscrit = $Inscrit;

        return $this;
    }
}
