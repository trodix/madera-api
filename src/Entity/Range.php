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
 * @ORM\Entity(repositoryClass="App\Repository\RangeRepository")
 * @ORM\Table(name="Range_Module")
 * @ApiResource(
 *      normalizationContext={"groups"={"range"}},
 *      denormalizationContext={"groups"={"range:input"}}
 * )
 * @ApiFilter(ExistsFilter::class, properties={"deletedAt"})
 */
class Range
{
    use SoftDeleteableEntity;
    
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"range", "module", "project", "template_module", "template_module_component", "quotation"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     * @Groups({"range", "range:input", "module", "project", "template_module", "template_module_component", "quotation"})
     * @Assert\Type(type="string")
     * @Assert\Length(max=45)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     * @Groups({"range", "range:input", "module", "project", "template_module", "template_module_component", "quotation"})
     * @Assert\Type(type="string")
     * @Assert\Length(max=45)
     */
    private $windowFrame;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Module", mappedBy="moduleRange")
     * @Groups({"range"})
     */
    private $modules;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"range", "module", "project", "template_module", "template_module_component", "quotation"})
     */
    protected $deletedAt;

    public function __construct()
    {
        $this->modules = new ArrayCollection();
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

    public function getWindowFrame(): ?string
    {
        return $this->windowFrame;
    }

    public function setWindowFrame(?string $windowFrame): self
    {
        $this->windowFrame = $windowFrame;

        return $this;
    }

    /**
     * @return Collection|Module[]
     */
    public function getModules(): Collection
    {
        return $this->modules;
    }

    public function addModule(Module $module): self
    {
        if (!$this->modules->contains($module)) {
            $this->modules[] = $module;
            $module->setModuleRange($this);
        }

        return $this;
    }

    public function removeModule(Module $module): self
    {
        if ($this->modules->contains($module)) {
            $this->modules->removeElement($module);
            // set the owning side to null (unless already changed)
            if ($module->getModuleRange() === $this) {
                $module->setModuleRange(null);
            }
        }

        return $this;
    }
}
