<?php

namespace App\Entity;

use App\Entity\TransferObject\MovieDto;
use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MovieRepository::class)
 */
class Movie
{
    /**
     * @ORM\Id
     * @ORM\Column(type = "string", length = 100)
     */
    private string $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $name;

    /**
     * @ORM\Column(type="integer")
     */
    private int $durationInMinutes;

    public function __construct(string $id, MovieDto $movieDto)
    {
        $this->id = $id;
        $this->name = $movieDto->name;
        $this->durationInMinutes = $movieDto->durationInMinutes;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getDurationInMinutes(): ?int
    {
        return $this->durationInMinutes;
    }
}
