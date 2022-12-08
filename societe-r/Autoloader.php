<?php

class Autoloader
  {
    /** Enregistre notre autoloader */
    public static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    /**
     * Inclue le fichier correspondant à notre classe
     * @param string $class Le nom de la classe à charger
     */
    public static function autoload($className)
    {
        require_once str_replace('\\', '/', $className) . '.php';
    }
  }