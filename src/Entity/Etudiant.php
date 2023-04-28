<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: EtudiantRepository::class)]
class Etudiant
{
    /**
        * @ORM\ManyToOne(targetEntity= "institut")
        * @ORM\JoinColumn(name="institut_id", referencedColumnName="id")
    */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nome = null;

    #[ORM\Column(length: 255)]
    private ?string $instit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

  /**
        * Set instit
        *
        * @param test\gestscolBundle\Entity\institut $instit
        *
        * @return etudiant
 */
    public function setInstit($instit)
    {
        $this->instit = $instit;
        return $this;
    }
    /**
    * Get nome
    *
    * @return \gestscolBundle\Entity\institut
    */
    public function getInstit()
    {
        return $this->instit;
    }
}
