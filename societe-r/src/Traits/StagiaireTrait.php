<?php

declare(strict_types=1);

namespace App\Traits;

trait StagiaireTrait
{
    public $id;
    public $nom;
    public $prenom;
    public $age;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): self
    {
        if ($this->age > 12 && $this->age < 18) {
            $this->age = $age;
        }

        return $this;
    }
}
