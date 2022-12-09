<?php

declare(strict_types=1);

class Autoloader
{
    /** Enregistre notre autoloader */
    public static function register(): void
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    /**
     * Inclue le fichier correspondant à notre classe.
     *
     * @param string $class Le nom de la classe à charger
     */
    public static function autoload($className): void
    {
        require_once str_replace('\\', '/', $className).'.php';
    }
}
