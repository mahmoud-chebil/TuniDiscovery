<?php

namespace App\Entity;

use App\Repository\DevisRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=DevisRepository::class)
 */
class Devis
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
     * @Assert\NotBlank
     * @Assert\NotNull
     * @Assert\Positive
     * @Groups("Reservation")
     */
    private $prixTot;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     * @Assert\NotNull
     * @Assert\Positive
     * @Groups("Reservation")
     */
    private $remise;

    /**
     * @ORM\OneToOne(targetEntity=Reservation::class, inversedBy="devis", cascade={"persist", "remove"})
     */
    private $Reservation;




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixTot(): ?float
    {
        return $this->prixTot;
    }

    public function setPrixTot(float $prixTot): self
    {
        $this->prixTot = $prixTot;

        return $this;
    }

    public function getRemise(): ?float
    {
        return $this->remise;
    }

    public function setRemise(float $remise): self
    {
        $this->remise = $remise;

        return $this;
    }



    public function __toString()
    {
        return (string)$this-> id;
    }

    public function getReservation(): ?Reservation
    {
        return $this->Reservation;
    }

    public function setReservation(?Reservation $Reservation): self
    {
        $this->Reservation = $Reservation;

        return $this;
    }
}
