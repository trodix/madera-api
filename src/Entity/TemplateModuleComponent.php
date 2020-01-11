<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TemplateModuleComponentRepository")
 * @ApiResource(
 *      normalizationContext={"groups"={"template_module_component"}},
 *      denormalizationContext={"groups"={"template_module_component:input"}}
 * )
 */
class TemplateModuleComponent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"template_module_component", "template_module", "template_module"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Component", inversedBy="moduleComponents")
     * @Groups({"template_module_component", "template_module_component:input", "template_module"})
     */
    private $component;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TemplateModule", inversedBy="templateModuleComponents")
     * @Groups({"template_module_component", "template_module_component:input"})
     */
    private $templateModule;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"template_module_component", "template_module_component:input", "template_module"})
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

    public function getTemplateModule(): ?TemplateModule
    {
        return $this->templateModule;
    }

    public function setTemplateModule(?TemplateModule $templateModule): self
    {
        $this->templateModule = $templateModule;

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
