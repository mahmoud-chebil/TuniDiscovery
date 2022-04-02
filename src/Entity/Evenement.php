<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("Reservation")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     * @Groups("Reservation")
     */
    public $prix_evenement;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("Reservation")
     */
    public $decription_evenement;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("Reservation")
     */
    public $titre_evenement;

    /**
     * @ORM\Column(type="integer")
     * @Groups("Reservation")
     */
    public $nbre_places;

    /**
     * @ORM\Column(type="date")
     * @Groups("Reservation")
     */
    public $date_debut;

    /**
     * @ORM\Column(type="date")
     * @Groups("Reservation")
     */
    public $date_fin;



    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="even", cascade={"all"}, orphanRemoval=true)
     */
    private $idRes;


    public function __construct()
    {
        $this->detailEvens = new ArrayCollection();
        $this->reservations = new ArrayCollection();
        $this->idRes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixEven(): ?float
    {
        return $this->prix_evenement;
    }

    public function setPrixEven(float $prix_even): self
    {
        $this->prix_evenement = $prix_even;

        return $this;
    }

    public function getDescEven(): ?string
    {
        return $this->decription_evenement;
    }

    public function setDescEven(string $desc_even): self
    {
        $this->decription_evenement = $desc_even;

        return $this;
    }

    public function getTitreEven(): ?string
    {
        return $this->titre_evenement;
    }

    public function setTitreEven(string $titre_even): self
    {
        $this->titre_evenementen = $titre_even;

        return $this;
    }

    public function getNbrePlace(): ?int
    {
        return $this->nbre_places;
    }

    public function setNbrePlace(int $nbre_place): self
    {
        $this->nbre_places = $nbre_place;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }


    /**
     * @return Collection|Reservation[]
     */
    public function getIdRes(): Collection
    {
        return $this->idRes;
    }

    public function addIdRe(Reservation $idRe): self
    {
        if (!$this->idRes->contains($idRe)) {
            $this->idRes[] = $idRe;
            $idRe->setEven($this);
        }

        return $this;
    }

    public function removeIdRe(Reservation $idRe): self
    {
        if ($this->idRes->removeElement($idRe)) {
            // set the owning side to null (unless already changed)
            if ($idRe->getEven() === $this) {
                $idRe->setEven(null);
            }
        }

        return $this;
    }



    public function __toString()
    {
        return $this-> decription_evenement;
    }

}
