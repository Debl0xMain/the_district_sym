<?php

namespace App\Entity;

use App\Repository\CategorieRepository;

use Symfony\Component\Serializer\Annotation\Groups;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;


#[ORM\Entity(repositoryClass: CategorieRepository::class)]
#[ApiResource(
  normalizationContext: ['groups' => ['read']],
  denormalizationContext: ['groups' => ['write']],
  operations: [
    new Get(),  
//    new Put(),
//    new Patch(),
//    new Delete(),
    new GetCollection(),
//    new Post(),
]
)]
class Categorie {

   #[ORM\Id]
   #[ORM\GeneratedValue]
   #[ORM\Column]
   #[Groups(['read'])]
   private ?int $id = null;

   #[ORM\Column(length: 50, nullable: true)]
   #[Groups(['read'])]
   private ?string $libelle = null;

   #[ORM\Column(length: 50, nullable: true)]
   #[Groups(['read'])]
   private ?string $image = null;

   #[ORM\Column]
   #[Groups(['read'])]
   private ?bool $active = null;

   #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Plat::class, orphanRemoval: true)]
   #[Groups(['read'])]
   private Collection $plats;

    public function __construct()
    {
        $this->plats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return Collection<int, Plat>
     */
    public function getPlats(): Collection
    {
        return $this->plats;
    }

    public function addPlat(Plat $plat): self
    {
        if (!$this->plats->contains($plat)) {
            $this->plats->add($plat);
            $plat->setCategorie($this);
        }

        return $this;
    }
    public function __toString(){
        return $this->libelle;
    }

    public function removePlat(Plat $plat): self
    {
        if ($this->plats->removeElement($plat)) {
            // set the owning side to null (unless already changed)
            if ($plat->getCategorie() === $this) {
                $plat->setCategorie(null);
            }
        }

        return $this;
    }
}
