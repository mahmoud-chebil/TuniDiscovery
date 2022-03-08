<?php


namespace App\Entity;


class Search
{
    /**
     * @var int|null
     */
    private $maxPrix;

    /**
     * @return int|null
     */
    public function getMaxPrix(): ?int
    {
        return $this->maxPrix;
    }

    /**
     * @param int|null $maxPrix
     */
    public function setMaxPrix(?int $maxPrix): void
    {
        $this->maxPrix = $maxPrix;
    }






}