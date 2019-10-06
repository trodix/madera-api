<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *      normalizationContext={"groups"={"customer"}},
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
     * @Assert\Type(type="string")
     * @Assert\Length(max=50)
     * @Assert\NotBlank
     * @Groups({"project", "customer", "quotation", "write"})
     */
    private $reference;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Type(type="string")
     * @Assert\Length(max=50)
     * @Assert\NotBlank
     * @Groups({"project", "customer", "quotation", "write"})
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Type(type="string")
     * @Assert\Length(max=50)
     * @Assert\NotBlank
     * @Groups({"project", "customer", "quotation", "write"})
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     * @Assert\Type(type="string")
     * @Assert\Length(max=15)
     * @Groups({"project", "customer", "quotation", "write"})
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     * @Assert\Type(type="string")
     * @Assert\Length(max=128)
     * @Groups({"project", "customer", "quotation", "write"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\Type(type="string")
     * @Assert\Length(max=100)
     * @Groups({"project", "customer", "quotation", "write"})
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     * @Assert\Type(type="string")
     * @Assert\Length(max=10)
     * @Groups({"project", "customer", "quotation", "write"})
     */
    private $zipcode;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Assert\Type(type="string")
     * @Assert\Length(max=50)
     * @Groups({"project", "customer", "quotation", "write"})
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @Assert\Type(type="string")
     * @Assert\Length(max=50)
     * @Groups({"project", "customer", "quotation", "write"})
     */
    private $country;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Project", mappedBy="customer")
     * @Groups({"customer", "quotation"})
     * @ApiSubresource
     */
    private $Projects;

    /**
     * @var \DateTime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     * @Groups({"project", "customer", "quotation"})
     */
    private $createdAt;

    /**
     * @var \DateTime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     * @Groups({"project", "customer", "quotation"})
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
