<?php

declare(strict_types=1);

namespace App\Classes;

use App\Exceptions\RExceptions;
use App\Interfaces\EmployeInterface;
use App\Interfaces\TravailleurInterface;
use App\Traits\NomTrait;

class Employe implements EmployeInterface, TravailleurInterface
{
    use NomTrait;

    private $id;
    private $prenom;
    private $age = self::AGE_MIN;
    private $anciennete = self::ANCIENNETE_MIN;

    public function __construct(
        $nom = null,
        $prenom = null,
        $age = null,
        $anciennete = null
    ) {
        $this->setId(uniqid())
            ->setNom($nom)
            ->setPrenom($prenom)
            ->setAge($age)
            ->setAnciennete($anciennete)
        ;
    }

    public function presentation(): void
    {
        echo "#$this->id - Mon nom est $this->nom, mon prenom est $this->prenom,
            j'ai $this->age ans
            je travail depuis $this->anciennete ans.<br />";
    }

    /**
     * Get the value of id.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of prenom.
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom.
     *
     * @return self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of age.
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age.
     *
     * @return self
     */
    public function setAge($age)
    {
        $age = $age > self::AGE_MAX ? self::AGE_MAX : throw new RExceptions('Il a moins de '.$this->age.' ans, le saligaud !');
        $age = $age < self::AGE_MIN ? self::AGE_MIN : throw new RExceptions('Il a plus de '.$this->$age.' ans, le salopiot !');

        return $this;
    }

    /**
     * Get the value of anciennete.
     */
    public function getAnciennete()
    {
        return $this->anciennete;
    }

    /**
     * Set the value of anciennete.
     *
     * @return self
     */
    public function setAnciennete($anciennete)
    {
        $anciennete = $anciennete > self::ANCIENNETE_MAX ? self::ANCIENNETE_MAX : throw new RExceptions('Il a plus de '.$this->anciennete.' ans d\'ancienneté, le salaud');
        $anciennete = $anciennete < self::ANCIENNETE_MIN ? self::ANCIENNETE_MIN : $anciennete;

        $this->anciennete = $anciennete;

        return $this;
    }

    public function travailler(): int
    {
        return random_int(6, 9);
    }
}
