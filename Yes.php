<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\YesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=YesRepository::class)
 */


  @ApiResource(
      normalizationContext={"groups"={"article:read"}},
      denormalizationContext={"groups"={"article:write"}}
  )
  @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 /


class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
    private $title;

    private $slug;

    private $content;

    private $picture;

    private $publishedAt;

    private $updateAt;

}
