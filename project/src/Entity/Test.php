<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TestRepository::class)
 */
class Test
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ttest;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTtest(): ?string
    {
        return $this->ttest;
    }

    public function setTtest(string $ttest): self
    {
        $this->ttest = $ttest;

        return $this;
    }
}
