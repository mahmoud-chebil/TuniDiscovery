<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SmsApiRepository")
 */
class SmsApi
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $senderAdresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $receiverAdresse;

    /**
     * @ORM\Column(type="string", length=160)
     */
    private $message;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSenderAdresse(): ?string
    {
        return $this->senderAdresse;
    }

    public function setSenderAdresse(string $senderAdresse): self
    {
        $this->senderAdresse = $senderAdresse;

        return $this;
    }

    public function getReceiverAdresse(): ?string
    {
        return $this->receiverAdresse;
    }

    public function setReceiverAdresse(string $receiverAdresse): self
    {
        $this->receiverAdresse = $receiverAdresse;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}