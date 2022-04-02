<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $nom;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $prenom;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $adressecomplet;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     * @Assert\Positive
     * @Assert\NotNull
     */
    private $telephone;


    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class)
     */
    private $iduser;

    /**
     * @ORM\OneToOne(targetEntity=Panier::class, cascade={"persist", "remove"})
     */
    private $idpanier;





    /**
     * @ORM\Column(type="float")
     */
    private $total;

    /**
     * @ORM\ManyToMany(targetEntity=Equipement::class, inversedBy="commandes")
     */
    private $listP;
    /**
     * @ORM\Column(type="array", nullable=true)
     */
    public $Quantites = [];

    /**
     * @ORM\Column(type="integer")
     */
    private $etat;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $email;


    public function __construct()
    {
        $this->ideq = new ArrayCollection();
        $this->listP = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getnom(): ?string
    {
        return $this->nom;
    }

    public function setnom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdressecomplet(): ?string
    {
        return $this->adressecomplet;
    }

    public function setAdressecomplet(string $adressecomplet): self
    {
        $this->adressecomplet = $adressecomplet;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getIduser(): ?Utilisateur
    {
        return $this->iduser;
    }

    public function setIduser(?Utilisateur $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdpanier(): ?Panier
    {
        return $this->idpanier;
    }

    public function setIdpanier(?Panier $idpanier): self
    {
        $this->idpanier = $idpanier;

        return $this;
    }



    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getIdequipement(): ?int
    {
        return $this->idequipement;
    }

    public function setIdequipement(int $idequipement): self
    {
        $this->idequipement = $idequipement;

        return $this;
    }

    /**
     * @return Collection|Equipement[]
     */
    public function getListP(): Collection
    {
        return $this->listP;
    }

    public function addListP(Equipement $listP): self
    {
        if (!$this->listP->contains($listP)) {
            $this->listP[] = $listP;
        }

        return $this;
    }

    public function removeListP(Equipement $listP): self
    {
        $this->listP->removeElement($listP);

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }







}