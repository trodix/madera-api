<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpecificationRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ApiResource(
 *      normalizationContext={"groups"={"specification"}},
 *      denormalizationContext={"groups"={"specification:input"}}
 * )
 */
class Specification
{
    use SoftDeleteableEntity;
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"specification", "component"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     * @Groups({"specification", "specification:input", "component"})
     * @Assert\Type(type="string")
     * @Assert\Length(max=45)
     * @Assert\NotBlank
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ComponentSpecification", mappedBy="specification", orphanRemoval=true)
     */
    private $componentSpecifications;

    public function __construct()
    {
        $this->componentSpecifications = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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
            $componentSpecification->setSpecification($this);
        }

        return $this;
    }

    public function removeComponentSpecification(ComponentSpecification $componentSpecification): self
    {
        if ($this->componentSpecifications->contains($componentSpecification)) {
            $this->componentSpecifications->removeElement($componentSpecification);
            // set the owning side to null (unless already changed)
            if ($componentSpecification->getSpecification() === $this) {
                $componentSpecification->setSpecification(null);
            }
        }

        return $this;
    }
}
