<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\ExistsFilter;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ModuleRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ApiResource(
 *      normalizationContext={"groups"={"module"}},
 *      denormalizationContext={"groups"={"module:input"}}
 * )
 * @ApiFilter(ExistsFilter::class, properties={"deletedAt"})
 */
class Module
{
    use SoftDeleteableEntity;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"module", "project"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Groups({"project", "module"})
     * @ApiProperty(writable=false)
     */
    private $reference;

    /**
     * @ORM\Column(type="string", length=45)
     * @Groups({"module", "module:input", "project"})
     * @Assert\Type(type="string")
     * @Assert\Length(max=45)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"module", "module:input", "project"})
     * @Assert\Type(type="float")
     * @Assert\PositiveOrZero
     */
    private $height;

    /**
     * @ORM\Column(type="float", nullable=true)
     * @Groups({"module", "module:input", "project"})
     * @Assert\Type(type="float")
     * @Assert\PositiveOrZero
     */
    private $width;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     * @Groups({"module", "module:input", "project"})
     * @Assert\Type(type="string")
     * @Assert\Length(max=15)
     */
    private $usageUnit;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Project", inversedBy="modules")
     */
    private $projects;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Range", inversedBy="modules")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"module", "module:input", "project"})
     */
    private $moduleRange;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ModuleComponent", mappedBy="module")
     * @Groups({"module", "project"})
     */
    private $moduleComponents;

    public function __construct()
    {
        $this->reference = strtoupper(uniqid("mod-"));
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

    /**
     * @return Collection|Project[]
     */
    public function getProjects(): Collection
    {
        return $this->projects;
    }

    public function addProject(Project $project): self
    {
        if (!$this->projects->contains($project)) {
            $this->projects[] = $project;
        }

        return $this;
    }

    public function removeProject(Project $project): self
    {
        if ($this->projects->contains($project)) {
            $this->projects->removeElement($project);
        }

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
            $moduleComponent->setModules($this);
        }

        return $this;
    }

    public function removeModuleComponent(ModuleComponent $moduleComponent): self
    {
        if ($this->moduleComponents->contains($moduleComponent)) {
            $this->moduleComponents->removeElement($moduleComponent);
            // set the owning side to null (unless already changed)
            if ($moduleComponent->getModules() === $this) {
                $moduleComponent->setModules(null);
            }
        }

        return $this;
    }
}
