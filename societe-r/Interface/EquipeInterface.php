<?php

interface EquipeInterface
{
    const NB_EMPLOYE_MAX = 5;
    
    public function getNom();

    public function getEmployes();
} 