<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     * @Assert\PositiveOrZero
     * @Assert\NotBlank
     */
    private $prix_evenement;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $decription_evenement;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $titre_evenement;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     * @Assert\NotNull
     * @Assert\Positive
     */
    private $nbre_places;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut;

    /**
     * @ORM\Column(type="date") 
     */
    private $date_fin;

    /**
     * @ORM\ManyToMany(targetEntity=Activite::class)
     */
    private $activite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank
     * @Assert\NotNull
     * @Assert\Positive
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     * @Assert\NotBlank
     */
    private $email;


    public function __construct()
    {
        $this->activite = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixEvenement(): ?float
    {
        return $this->prix_evenement;
    }

    public function setPrixEvenement(float $prix_evenement): self
    {
        $this->prix_evenement = $prix_evenement;

        return $this;
    }

    public function getDecriptionEvenement(): ?string
    {
        return $this->decription_evenement;
    }

    public function setDecriptionEvenement(string $decription_evenement): self
    {
        $this->decription_evenement = $decription_evenement;

        return $this;
    }

    public function getTitreEvenement(): ?string
    {
        return $this->titre_evenement;
    }

    public function setTitreEvenement(string $titre_evenement): self
    {
        $this->titre_evenement = $titre_evenement;

        return $this;
    }

    public function getNbrePlaces(): ?int
    {
        return $this->nbre_places;
    }

    public function setNbrePlaces(int $nbre_places): self
    {
        $this->nbre_places = $nbre_places;

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
     * @return Collection|Activite[]
     */
    public function getActivite(): Collection
    {
        return $this->activite;
    }

    public function addActivite(Activite $activite): self
    {
        if (!$this->activite->contains($activite)) {
            $this->activite[] = $activite;
        }

        return $this;
    }

    public function removeActivite(Activite $activite): self
    {
        $this->activite->removeElement($activite);

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(?int $tel): self
    {
        $this->tel = $tel;

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
