<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuotationRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ApiResource(
 *      normalizationContext={"groups"={"quotation"}},
 *      denormalizationContext={"groups"={"quotation:input"}}
 * )
 */
class Quotation
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"quotation", "user", "project", "customer"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"quotation", "user", "project", "customer"})
     * @ApiProperty(writable=false)
     */
    private $reference;

    /**
     * @ORM\Column(type="string")
     * @Assert\Choice(callback="getStateList")
     * @Groups({"quotation", "user", "project", "customer", "quotation:input"})
     * @ApiProperty(
     *     attributes={
     *         "openapi_context"={
     *             "type"="string",
     *             "enum"={"CANCELED", "WAITING", "VALIDATED"},
     *             "example"="WAITING"
     *         }
     *     }
     * )
     */
    private $state;

    /**
     * @var \DateTime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     * @Groups({"quotation", "user", "customer", "project"})
     */
    private $createdAt;

    /**
     * @var \DateTime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     * @Groups({"quotation", "user", "customer", "project"})
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Project", inversedBy="quotations")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"quotation", "quotation:input"})
     */
    private $project;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Module", mappedBy="quotations")
     * @Groups({"project", "customer", "quotation", "quotation:input"})
     */
    private $modules;

    /**
     * @ORM\Column(type="float")
     * @Groups({"project",  "quotation", "quotation:input"})
     */
    private $travelCost = 0.00;

    /**
     * @ORM\Column(type="float")
     * @Groups({"project",  "quotation", "quotation:input"})
     */
    private $vat = 20.00;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"project", "quotation"})
     */
    private $deletedAt;

    public function __construct()
    {
        $this->reference = strtoupper(uniqid("qt-"));
        $this->modules = new ArrayCollection();
    }

    /**
     * @return array
     */
    public static function getStateList()
    {
        return [
            "CANCELED",
            "WAITING",
            "VALIDATED"
        ];
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }

    /**
     * @return Collection|Module[]
     */
    public function getModules(): Collection
    {
        return $this->modules;
    }

    public function getDeletedAt()
    {
        return $this->deletedAt();
    }

    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function addModule(Module $module): self
    {
        if (!$this->modules->contains($module)) {
            $this->modules[] = $module;
            $module->addQuotation($this);
        }

        return $this;
    }

    public function removeModule(Module $module): self
    {
        if ($this->modules->contains($module)) {
            $this->modules->removeElement($module);
            $module->removeQuotation($this);
        }

        return $this;
    }

    public function getTravelCost(): ?float
    {
        return $this->travelCost;
    }

    public function setTravelCost(float $travelCost): self
    {
        $this->travelCost = $travelCost;

        return $this;
    }

    public function getVat(): ?float
    {
        return $this->vat;
    }

    public function setVat(float $vat): self
    {
        $this->vat = $vat;

        return $this;
    }

    public function getHTPrice(): ?float 
    {
        $price = 0.00;
        foreach($this->getModules() as $module) {
            $price += (float) $module->getHTPrice();
        }
        $price += $this->getTravelCost();
        
        return $price;
    }

    public function getTTCPrice(): ?float 
    {
        return (float) $this->getHTPrice() + ($this->getHTPrice() * ($this->getVat() / 100));
    }

}
