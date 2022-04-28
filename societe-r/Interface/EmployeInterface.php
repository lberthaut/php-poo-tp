<?php

interface EmployeInterface
{
    const AGE_MIN = 18;
    const AGE_MAX = 65;
    const ANCIENNETE_MIN = 0;
    const ANCIENNETE_MAX = 47;

    public function presentation();

    public function getId();

    public function getNom();

    public function getPrenom();

    public function getAge();

    public function getAnciennete();
} 