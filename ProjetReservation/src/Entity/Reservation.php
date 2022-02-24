<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     * @Assert\NotNull
     * @Assert\Positive
     */
    private $nbPersonne;

    /**
     * @ORM\Column(type="string")
     */
    private $lib;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="idRes")
     * @Assert\NotNull
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Evenement::class, inversedBy="idRes")
     * @Assert\NotNull
     */
    private $even;

    /**
     * @ORM\OneToMany(targetEntity=Devis::class, mappedBy="reservation", cascade={"all"}, orphanRemoval=true)
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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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
    public function getLib(): ?string
    {
        return $this->lib;
    }

    public function setLib(string $lib): self
    {
        $this->lib = $lib;

        return $this;
    }


    /**
     * @return Collection|Devis[]
     */
    public function getDevis(): Collection
    {
        return $this->devis;
    }

    public function addDevi(Devis $devi): self
    {
        if (!$this->devis->contains($devi)) {
            $this->devis[] = $devi;
            $devi->setReservation($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): self
    {
        if ($this->devis->removeElement($devi)) {
            // set the owning side to null (unless already changed)
            if ($devi->getReservation() === $this) {
                $devi->setReservation(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this-> lib;
    }
}
