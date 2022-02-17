<?php

namespace App\Entity;

use App\Repository\EquipementRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipementRepository::class)
 */
class Equipement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $libelle_equipement;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_equipement;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     */
    private $prix_equipement;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getLibelleEquipement(): ?string
    {
        return $this->libelle_equipement;
    }

    public function setLibelleEquipement(string $libelle_equipement): self
    {
        $this->libelle_equipement = $libelle_equipement;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDescriptionEquipement(): ?string
    {
        return $this->description_equipement;
    }

    public function setDescriptionEquipement(string $description_equipement): self
    {
        $this->description_equipement = $description_equipement;

        return $this;
    }

    public function getPrixEquipement(): ?float
    {
        return $this->prix_equipement;
    }

    public function setPrixEquipement(float $prix_equipement): self
    {
        $this->prix_equipement = $prix_equipement;

        return $this;
    }






}
