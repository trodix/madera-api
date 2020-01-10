<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ModuleComponentRepository")
 * @ApiResource(
 *      normalizationContext={"groups"={"module_component"}},
 *      denormalizationContext={"groups"={"module_component:input"}}
 * )
 */
class ModuleComponent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"module_component", "module", "project"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Component", inversedBy="moduleComponents")
     * @Groups({"module_component", "module_component:input", "module", "project"})
     */
    private $component;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Module", inversedBy="moduleComponents")
     * @Groups({"module_component", "module_component:input", "project"})
     */
    private $module;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"module_component", "module_component:input", "module", "project"})
     * @Assert\Type(type="float")
     * @Assert\PositiveOrZero
     */
    private $quantity;

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

    public function getModule(): ?Module
    {
        return $this->module;
    }

    public function setModule(?Module $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
