<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 * @ApiResource
 */

class Project
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $projectReference;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateProject;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getProjectReference(): ?string
    {
        return $this->projectReference;
    }

    public function setProjectReference(string $projectReference): self
    {
        $this->projectReference = $projectReference;

        return $this;
    }

    public function getDateProject(): ?\DateTimeInterface
    {
        return $this->dateProject;
    }

    public function setDateProject(\DateTimeInterface $dateProject): self
    {
        $this->dateProject = $dateProject;

        return $this;
    }
}
