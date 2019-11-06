<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      normalizationContext={"groups"={"site"}},
 *      denormalizationContext={"groups"={"site:input"}}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\SiteRepository")
 */
class Site
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"site", "user", "project"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     * @Groups({"site", "site:input", "user", "project"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=45)
     * @Groups({"site", "site:input", "user", "project"})
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=10)
     * @Groups({"site", "site:input", "user", "project"})
     */
    private $zipcode;

    /**
     * @ORM\Column(type="string", length=45)
     * @Groups({"site", "site:input", "user", "project"})
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=45)
     * @Groups({"site", "site:input", "user", "project"})
     */
    private $country;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="sites")
     * @ApiSubresource
     * @Groups({"site"})
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
        }

        return $this;
    }
}
