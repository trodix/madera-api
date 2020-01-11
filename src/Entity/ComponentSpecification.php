<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ComponentSpecificationRepository")
 * @ApiResource(
 *      normalizationContext={"groups"={"component_specification"}},
 *      denormalizationContext={"groups"={"component_specification:input"}}
 * )
 */
class ComponentSpecification
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"component_specification", "component", "quotation"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Component", inversedBy="componentSpecifications")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"component_specification", "component_specification:input"})
     */
    private $component;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     * @Groups({"component_specification", "component_specification:input", "component", "quotation"})
     * @Assert\Type(type="string")
     * @Assert\Length(max=15)
     */
    private $measureUnit;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"component_specification", "component_specification:input", "component", "quotation"})
     * @Assert\Type(type="float")
     * @Assert\PositiveOrZero
     */
    private $measureValue;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Specification", inversedBy="componentSpecifications")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"component_specification", "component_specification:input", "component", "quotation"})
     */
    private $specification;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComponent(): ?Component
    {
        return $this->component;
    }

    public function setComponent(?Component $component): self
    {
        $this->component = $component;

        return $this;
    }

    public function getMeasureUnit(): ?string
    {
        return $this->measureUnit;
    }

    public function setMeasureUnit(?string $measureUnit): self
    {
        $this->measureUnit = $measureUnit;

        return $this;
    }

    public function getMeasureValue(): ?float
    {
        return $this->measureValue;
    }

    public function setMeasureValue(?float $measureValue): self
    {
        $this->measureValue = $measureValue;

        return $this;
    }

    public function getSpecification(): ?Specification
    {
        return $this->specification;
    }

    public function setSpecification(?Specification $specification): self
    {
        $this->specification = $specification;

        return $this;
    }
}
