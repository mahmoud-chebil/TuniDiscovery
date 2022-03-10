<?php

namespace App\Entity;

use App\Repository\EquipementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     */
    private $libelle_equipement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_equipement;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_equipement;

    /**
     * @ORM\ManyToMany(targetEntity=Commande::class, mappedBy="listP")
     */
    private $commandes;


    public function __construct()
    {
        $this->listP = new ArrayCollection();
        $this->commandes = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getlibelle_equipement(): ?string
    {
        return $this->libelle_equipement;
    }

    public function setlibelle_equipement(string $libelle_equipement): self
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

    public function getdescription_equipement(): ?string
    {
        return $this->description_equipement;
    }

    public function setdescription_equipement(string $description_equipement): self
    {
        $this->description_equipement = $description_equipement;

        return $this;
    }

    public function getprix_equipement(): ?float
    {
        return $this->prix_equipement;

    }

    public function setprix_equipement(float $prix_equipement): self
    {
        $this->prix_equipement = $prix_equipement;

        return $this;
    }
    public function __toString() {
        return (string) $this->libelle_equipement;
    }

    /**
     * @return Collection|Commande[]
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->addListP($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            $commande->removeListP($this);
        }

        return $this;
    }

}
