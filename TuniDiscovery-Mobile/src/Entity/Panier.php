<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_panier;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $libellep;

    /**
     * @ORM\ManyToMany(targetEntity=Equipement::class)
     */
    private $idEquipement;



    public function __construct()
    {
        $this->idEquipement = new ArrayCollection();
    }




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePanier(): ?\DateTimeInterface
    {
        return $this->date_panier;
    }

    public function setDatePanier(\DateTimeInterface $date_panier): self
    {
        $this->date_panier = $date_panier;

        return $this;
    }


    public function getLibellep(): ?string
    {
        return $this->libellep;
    }

    public function setLibellep(string $libellep): self
    {
        $this->libellep = $libellep;

        return $this;
    }

    /**
     * @return Collection|Equipement[]
     */
    public function getIdEquipement(): Collection
    {
        return $this->idEquipement;
    }

    public function addIdEquipement(Equipement $idEquipement): self
    {
        if (!$this->idEquipement->contains($idEquipement)) {
            $this->idEquipement[] = $idEquipement;
        }

        return $this;
    }

    public function removeIdEquipement(Equipement $idEquipement): self
    {
        $this->idEquipement->removeElement($idEquipement);

        return $this;
    }
    public function __toString() {

        return (string) $this->libellep;
    }


}
