<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      normalizationContext={"groups"={"read"}},
 *      denormalizationContext={"groups"={"write"}}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 */
class Customer
{
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"read", "write"})
     */
    private $reference;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"read", "write"})
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"read", "write"})
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     * @Groups({"read", "write"})
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     * @Groups({"read", "write"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Groups({"read", "write"})
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     * @Groups({"read", "write"})
     */
    private $zipcode;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups({"read", "write"})
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Groups({"read", "write"})
     */
    private $country;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Project", mappedBy="customer")
     * @Groups({"read"})
     */
    private $Projects;

    /**
     * @var \DateTime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     * @Groups({"read"})
     */
    private $createdAt;

    /**
     * @var \DateTime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     * @Groups({"read"})
     */
    private $updatedAt;

    public function __construct()
    {
        $this->Projects = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(?string $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return Collection|Project[]
     */
    public function getProjects(): array
    {
        return $this->Projects->getValues();
    }

    public function addProject(Project $project): self
    {
        if (!$this->Projects->contains($project)) {
            $this->Projects[] = $project;
            $project->setCustomer($this);
        }

        return $this;
    }

    public function removeProject(Project $project): self
    {
        if ($this->Projects->contains($project)) {
            $this->Projects->removeElement($project);
            // set the owning side to null (unless already changed)
            if ($project->getCustomer() === $this) {
                $project->setCustomer(null);
            }
        }

        return $this;
    }


    /**
     * Get $updated
     *
     * @return  \DateTime
     */ 
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set $updated
     *
     * @param  \DateTime  $updatedAt  $updated
     *
     * @return  self
     */ 
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get $created
     *
     * @return  \DateTime
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set $created
     *
     * @param  \DateTime  $createdAt  $created
     *
     * @return  self
     */ 
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }
}
