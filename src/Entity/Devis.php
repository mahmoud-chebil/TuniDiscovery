<?php

namespace App\Entity;

use App\Repository\DevisRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=DevisRepository::class)
 */
class Devis
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     * @Assert\NotNull
     * @Assert\Positive
     */
    private $prixTot;

    /**
     * @ORM\Column(type="float")
     * @Assert\Positive
     */
    private $remise;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $codeDevis;

    /**
     * @ORM\ManyToOne(targetEntity=Reservation::class, inversedBy="devis")
     */
    private $reservation;



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

    public function getCodeDevis(): ?string
    {
        return $this->codeDevis;
    }

    public function setCodeDevis(string $codeDevis): self
    {
        $this->codeDevis = $codeDevis;

        return $this;
    }


    public function __toString()
    {
        return $this-> codeDevis;
    }

    public function getReservation(): ?Reservation
    {
        return $this->reservation;
    }

    public function setReservation(?Reservation $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }
}
