<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DaysRepository")
 */
class Days
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $temperature_max;

    /**
     * @ORM\Column(type="integer")
     */
    private $temperature_min;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $text;

    /**
     * @ORM\Column(type="integer")
     */
    private $humidity;

    /**
     * @ORM\Column(type="integer")
     */
    private $wind;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $wind_direction;

    /**
     * @ORM\Column(type="string")
     */
    private $sunrise;

    /**
     * @ORM\Column(type="string")
     */
    private $sunset;

    /**
     * @ORM\Column(type="string")
     */
    private $moonrise;

    /**
     * @ORM\Column(type="string")
     */
    private $moonset;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTemperatureMax(): ?int
    {
        return $this->temperature_max;
    }

    public function setTemperatureMax(int $temperature_max): self
    {
        $this->temperature_max = $temperature_max;

        return $this;
    }

    public function getTemperatureMin(): ?int
    {
        return $this->temperature_min;
    }

    public function setTemperatureMin(int $temperature_min): self
    {
        $this->temperature_min = $temperature_min;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getHumidity(): ?int
    {
        return $this->humidity;
    }

    public function setHumidity(int $humidity): self
    {
        $this->humidity = $humidity;

        return $this;
    }

    public function getWind(): ?int
    {
        return $this->wind;
    }

    public function setWind(int $wind): self
    {
        $this->wind = $wind;

        return $this;
    }

    public function getWindDirection(): ?string
    {
        return $this->wind_direction;
    }

    public function setWindDirection(string $wind_direction): self
    {
        $this->wind_direction = $wind_direction;

        return $this;
    }

    public function getSunrise(): ?string
    {
        return $this->sunrise;
    }

    public function setSunrise(string $sunrise): self
    {
        $this->sunrise = $sunrise;

        return $this;
    }

    public function getSunset(): ?string
    {
        return $this->sunset;
    }

    public function setSunset(string $sunset): self
    {
        $this->sunset = $sunset;

        return $this;
    }

    public function getMoonrise(): ?string
    {
        return $this->moonrise;
    }

    public function setMoonrise(string $moonrise): self
    {
        $this->moonrise = $moonrise;

        return $this;
    }

    public function getMoonset(): ?string
    {
        return $this->moonset;
    }

    public function setMoonset(string $moonset): self
    {
        $this->moonset = $moonset;

        return $this;
    }
}
