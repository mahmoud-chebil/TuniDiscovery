<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank
     */
    private $nom_activite;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $type_activite;

    /**
     * @ORM\Column(type="integer")
     * @Assert\PositiveOrZero
     * @Assert\NotBlank
     */
    private $prix_activite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomActivite(): ?string
    {
        return $this->nom_activite;
    }

    public function setNomActivite(string $nom_activite): self
    {
        $this->nom_activite = $nom_activite;

        return $this;
    }

    public function getTypeActivite(): ?string
    {
        return $this->type_activite;
    }

    public function setTypeActivite(string $type_activite): self
    {
        $this->type_activite = $type_activite;

        return $this;
    }

    public function getPrixActivite(): ?int
    {
        return $this->prix_activite;
    }

    public function setPrixActivite(int $prix_activite): self
    {
        $this->prix_activite = $prix_activite;

        return $this;
    }
    public function __toString()
    {

        return $this->nom_activite;
    }
}
