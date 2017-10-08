<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Film
 *
 * @ORM\Table(name="films")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FilmRepository")
 */
class Film
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @NotBlank
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @NotBlank
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @NotBlank
     */
    private $director;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @NotBlank
     */
    private $year;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Film
     */
    public function setId(?int $id): Film
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Film
     */
    public function setName(?string $name): Film
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getGenre(): ?string
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     * @return Film
     */
    public function setGenre(?string $genre): Film
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * @return string
     */
    public function getDirector(): ?string
    {
        return $this->director;
    }

    /**
     * @param string $director
     * @return Film
     */
    public function setDirector(?string $director): Film
    {
        $this->director = $director;
        return $this;
    }

    /**
     * @return int
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * @param int $year
     * @return Film
     */
    public function setYear(?int $year): Film
    {
        $this->year = $year;
        return $this;
    }



}

