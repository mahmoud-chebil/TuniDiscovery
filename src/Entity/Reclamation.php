<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReclamationRepository::class)
 */
class Reclamation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\NotBlank(message="veuillez saisir un titre")
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     * *@Assert\NotBlank(message="veuillez saisir votre reclamation")
     */
    private $descRec;

    /**
     * @ORM\Column(type="date")
     */
    private $dateRec;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reclamations")
     * @Assert\NotBlank(message="veuillez saisir votre nom")
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity=TypeReclamation::class, inversedBy="reclamations")
     * @Assert\NotBlank(message="veuillez choisir type de votre reclamation")
     */
    private $IdType;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $reponse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescRec(): ?string
    {
        return $this->descRec;
    }

    public function setDescRec(string $descRec): self
    {
        $this->descRec = $descRec;

        return $this;
    }

    public function getDateRec(): ?\DateTimeInterface
    {
        return $this->dateRec;
    }

    public function setDateRec(\DateTimeInterface $dateRec): self
    {
        $this->dateRec = $dateRec;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdType(): ?TypeReclamation
    {
        return $this->IdType;
    }

    public function setIdType(?TypeReclamation $IdType): self
    {
        $this->IdType = $IdType;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(?string $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }
    public function __toString()
    {
        return $this->descRec;
    }
}
