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
 * @ORM\Entity(repositoryClass="App\Repository\ComponentRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ApiResource(
 *      normalizationContext={"groups"={"component"}},
 *      denormalizationContext={"groups"={"component:input"}}
 * )
 */
class Component
{
    use SoftDeleteableEntity;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"component"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     * @Groups({"component", "component:input", "module", "project"})
     * @Assert\Type(type="string")
     * @Assert\Length(max=45)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     * @Groups({"component", "component:input", "module", "project"})
     * @Assert\Type(type="float")
     * @Assert\PositiveOrZero
     */
    private $unitPrice;

    /**
     * @ORM\Column(type="string", length=45)
     * @Groups({"component", "component:input", "module", "project"})
     * @Assert\Type(type="string")
     * @Assert\Length(max=45)
     * @Assert\NotBlank
     */
    private $finish;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"component", "component:input", "module", "project"})
     * @ApiProperty(writable=false)
     */
    private $reference;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ModuleComponent", mappedBy="component")
     */
    private $moduleComponents;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ComponentSpecification", mappedBy="component")
     * @Groups({"component", "component:input", "module", "project"})
     */
    private $componentSpecifications;

    public function __construct()
    {
        $this->reference = strtoupper(uniqid("cp-"));
        $this->moduleComponents = new ArrayCollection();
        $this->componentSpecifications = new ArrayCollection();
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

    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function getFinish(): ?string
    {
        return $this->finish;
    }

    public function setFinish(string $finish): self
    {
        $this->finish = $finish;

        return $this;
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

    /**
     * @return Collection|ModuleComponent[]
     */
    public function getModuleComponents(): Collection
    {
        return $this->moduleComponents;
    }

    public function addModuleComponent(ModuleComponent $moduleComponent): self
    {
        if (!$this->moduleComponents->contains($moduleComponent)) {
            $this->moduleComponents[] = $moduleComponent;
            $moduleComponent->setComponent($this);
        }

        return $this;
    }

    public function removeModuleComponent(ModuleComponent $moduleComponent): self
    {
        if ($this->moduleComponents->contains($moduleComponent)) {
            $this->moduleComponents->removeElement($moduleComponent);
            // set the owning side to null (unless already changed)
            if ($moduleComponent->getComponent() === $this) {
                $moduleComponent->setComponent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ComponentSpecification[]
     */
    public function getComponentSpecifications(): Collection
    {
        return $this->componentSpecifications;
    }

    public function addComponentSpecification(ComponentSpecification $componentSpecification): self
    {
        if (!$this->componentSpecifications->contains($componentSpecification)) {
            $this->componentSpecifications[] = $componentSpecification;
            $componentSpecification->setComponent($this);
        }

        return $this;
    }

    public function removeComponentSpecification(ComponentSpecification $componentSpecification): self
    {
        if ($this->componentSpecifications->contains($componentSpecification)) {
            $this->componentSpecifications->removeElement($componentSpecification);
            // set the owning side to null (unless already changed)
            if ($componentSpecification->getComponent() === $this) {
                $componentSpecification->setComponent(null);
            }
        }

        return $this;
    }
}
