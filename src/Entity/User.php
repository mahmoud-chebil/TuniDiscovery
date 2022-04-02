<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("Reservation")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("Reservation")
     */
    private $userName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("Reservation")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("Reservation")
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("Reservation")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("Reservation")
     */
    private $role;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="user", cascade={"all"}, orphanRemoval=true)
     */
    private $reservations;



    public function __construct()
    {
        $this->idRes = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

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

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

     public function __toString()
    {
        return (string)$this-> id;
    }

     /**
      * @return Collection|Reservation[]
      */
     public function getReservations(): Collection
     {
         return $this->reservations;
     }

     public function addReservation(Reservation $reservation): self
     {
         if (!$this->reservations->contains($reservation)) {
             $this->reservations[] = $reservation;
             $reservation->setUser($this);
         }

         return $this;
     }

     public function removeReservation(Reservation $reservation): self
     {
         if ($this->reservations->removeElement($reservation)) {
             // set the owning side to null (unless already changed)
             if ($reservation->getUser() === $this) {
                 $reservation->setUser(null);
             }
         }

         return $this;
     }
}
