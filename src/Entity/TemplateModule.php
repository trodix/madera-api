<?php

namespace App\Entity;

use App\Entity\Quotation;
use Doctrine\ORM\Mapping as ORM;
use App\Traits\SoftDeleteableEntity;
use Gedmo\Mapping\Annotation as Gedmo;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\ExistsFilter;


/**
 * @ORM\Entity(repositoryClass="App\Repository\TemplateModuleRepository")
 * @ApiResource(
 *      normalizationContext={"groups"={"template_module"}},
 *      denormalizationContext={"groups"={"template_module:input"}}
 * )
 * @ApiFilter(ExistsFilter::class, properties={"deletedAt"})
 */
class TemplateModule
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"template_module", "template_module_component"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"template_module","template_module:input", "template_module_component"})
     * @ApiProperty(writable=false)
     */
    private $reference;

    /**
     * @ORM\Column(type="string", length=45)
     * @Groups({"template_module","template_module:input", "template_module_component"})
     * @Assert\Type(type="string")
     * @Assert\Length(max=45)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"template_module","template_module:input", "template_module_component"})
     * @Assert\Type(type="float")
     * @Assert\PositiveOrZero
     */
    private $height;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"template_module","template_module:input", "template_module_component"})
     * @Assert\Type(type="float")
     * @Assert\PositiveOrZero
     */
    private $width;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     * @Groups({"template_module", "template_module:input", "template_module_component"})
     * @Assert\Type(type="string")
     * @Assert\Length(max=15)
     */
    private $usageUnit;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Range", inversedBy="modules")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"template_module","template_module:input", "template_module_component"})
     */
    private $moduleRange;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TemplateModuleComponent", mappedBy="templateModule")
     * @Groups({"template_module"})
     */
    private $templateModuleComponents;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"template_module","template_module:input", "template_module_component"})
     */
    protected $deletedAt;

    public function __construct()
    {
        $this->reference = strtoupper(uniqid("tpl-"));
        $this->projects = new ArrayCollection();
        $this->moduleComponents = new ArrayCollection();
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

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getUsageUnit(): ?string
    {
        return $this->usageUnit;
    }

    public function setUsageUnit(?string $usageUnit): self
    {
        $this->usageUnit = $usageUnit;

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

    public function getModuleRange(): ?Range
    {
        return $this->moduleRange;
    }

    public function setModuleRange(?Range $moduleRange): self
    {
        $this->moduleRange = $moduleRange;

        return $this;
    }

    /**
     * @return Collection|TemplateModuleComponent[]
     */
    public function getTemplateModuleComponents(): Collection
    {
        return $this->templateModuleComponents;
    }

    public function addTemplateModuleComponent(TemplateModuleComponent $templateModuleComponent): self
    {
        if (!$this->templateModuleComponents->contains($templateModuleComponent)) {
            $this->templateModuleComponents[] = $templateModuleComponent;
            $templateModuleComponent->setModules($this);
        }

        return $this;
    }

    public function removeTemplateModuleComponent(TemplateModuleComponent $templateModuleComponent): self
    {
        if ($this->templateModuleComponents->contains($templateModuleComponent)) {
            $this->templateModuleComponents->removeElement($templateModuleComponent);
            // set the owning side to null (unless already changed)
            if ($templateModuleComponent->getModules() === $this) {
                $templateModuleComponent->setModules(null);
            }
        }

        return $this;
    }
}
