<?php

namespace App\Entity;

use App\Repository\PlatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Serializer\Annotation\Groups;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Put;

#[ORM\Entity(repositoryClass: PlatRepository::class)]
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
class Plat
{
   #[ORM\Id]
   #[ORM\GeneratedValue]
   #[ORM\Column]
   #[Groups(['read'])]
   private ?int $id = null;

   #[ORM\Column(length: 50)]
   #[Groups(['read'])]
   private ?string $libelle = null;

   #[ORM\Column(type: Types::TEXT, nullable: true)]
   #[Groups(['read'])]
   private ?string $description = null;

   #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 2)]
   #[Groups(['read'])]
   private ?string $prix = null;

   #[ORM\Column(length: 50, nullable: true)]
   #[Groups(['read'])]
   private ?string $image = null;

   #[ORM\Column]
   #[Groups(['read'])]
   private ?bool $active = null;

   #[ORM\ManyToOne(inversedBy: 'plats')]
   #[ORM\JoinColumn(nullable: false)]
   #[Groups(['read'])]
   private ?Categorie $categorie = null;

   #[ORM\OneToMany(mappedBy: 'plat', targetEntity: Detail::class)]
   #[Groups(['read'])]
   private Collection $details;

    public function __construct()
    {
        $this->details = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

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

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, Detail>
     */
    public function getDetails(): Collection
    {
        return $this->details;
    }

    public function addDetail(Detail $detail): self
    {
        if (!$this->details->contains($detail)) {
            $this->details->add($detail);
            $detail->setPlat($this);
        }

        return $this;
    }

    public function removeDetail(Detail $detail): self
    {
        if ($this->details->removeElement($detail)) {
            // set the owning side to null (unless already changed)
            if ($detail->getPlat() === $this) {
                $detail->setPlat(null);
            }
        }

        return $this;
    }
}
