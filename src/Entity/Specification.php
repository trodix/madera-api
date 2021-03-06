<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Traits\SoftDeleteableEntity;
use Gedmo\Mapping\Annotation as Gedmo;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\ExistsFilter;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpecificationRepository")
 * @ApiResource(
 *      normalizationContext={"groups"={"specification"}},
 *      denormalizationContext={"groups"={"specification:input"}}
 * )
 * @ApiFilter(ExistsFilter::class, properties={"deletedAt"})
 */
class Specification
{
    use SoftDeleteableEntity;
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"specification", "component", "quotation", "template_module"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     * @Groups({"specification", "specification:input", "component", "quotation", "template_module"})
     * @Assert\Type(type="string")
     * @Assert\Length(max=45)
     * @Assert\NotBlank
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ComponentSpecification", mappedBy="specification", orphanRemoval=true)
     */
    private $componentSpecifications;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"specification", "component", "quotation", "template_module"})
     */
    protected $deletedAt;

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
