<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActiviteRepository::class)
 */
class Activite
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
    private $lib_act;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_act;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_act;

    /**
     * @ORM\ManyToMany(targetEntity=Evenement::class)
     */
    private $idEvent;





    public function __construct()
    {
        $this->even = new ArrayCollection();
        $this->detailevens = new ArrayCollection();
        $this->idEvent = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibAct(): ?string
    {
        return $this->lib_act;
    }

    public function setLibAct(string $lib_act): self
    {
        $this->lib_act = $lib_act;

        return $this;
    }

    public function getTypeAct(): ?string
    {
        return $this->type_act;
    }

    public function setTypeAct(string $type_act): self
    {
        $this->type_act = $type_act;

        return $this;
    }

    public function getPrixAct(): ?float
    {
        return $this->prix_act;
    }

    public function setPrixAct(float $prix_act): self
    {
        $this->prix_act = $prix_act;

        return $this;
    }

    /**
     * @return Collection|Evenement[]
     */
    public function getIdEvent(): Collection
    {
        return $this->idEvent;
    }

    public function addIdEvent(Evenement $idEvent): self
    {
        if (!$this->idEvent->contains($idEvent)) {
            $this->idEvent[] = $idEvent;
        }

        return $this;
    }

    public function removeIdEvent(Evenement $idEvent): self
    {
        $this->idEvent->removeElement($idEvent);

        return $this;
    }



}
