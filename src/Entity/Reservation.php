<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("Reservation")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     * @Assert\NotNull
     * @Assert\Positive
     * @Groups("Reservation")
     */
    private $nbPersonne;

    /**
     * @ORM\Column(type="date")
     * @Groups("Reservation")
     */
    private $dateres;

    /**
     * @ORM\Column(type="boolean")
     * @Groups("Reservation")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity=Evenement::class, inversedBy="idRes")
     * @Assert\NotNull
     * @Groups("Reservation")
     */
    private $even;
    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reservations")
     * @Groups("Reservation")
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity=Devis::class, mappedBy="Reservation", cascade={"persist", "remove"})
     * @Groups("Reservation")
     */
    private $devis;

    public function __construct()
    {
        $this->devis = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbPersonne(): ?int
    {
        return $this->nbPersonne;
    }

    public function setNbPersonne(int $nbPersonne): self
    {
        $this->nbPersonne = $nbPersonne;

        return $this;
    }



    public function getEven(): ?Evenement
    {
        return $this->even;
    }

    public function setEven(?Evenement $even): self
    {
        $this->even = $even;

        return $this;
    }








    public function getDateres(): ?\DateTimeInterface
    {
        return $this->dateres;
    }

    public function setDateres(\DateTimeInterface $dateres): self
    {
        $this->dateres = $dateres;

        return $this;
    }

    public function getEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


    public function getDevis(): ?Devis
    {
        return $this->devis;
    }

    public function setDevis(?Devis $devis): self
    {
        // unset the owning side of the relation if necessary
        if ($devis === null && $this->devis !== null) {
            $this->devis->setReservation(null);
        }

        // set the owning side of the relation if necessary
        if ($devis !== null && $devis->getReservation() !== $this) {
            $devis->setReservation($this);
        }

        $this->devis = $devis;

        return $this;
    }
    public function __toString()
    {
        return (string)$this-> id;
    }
}
