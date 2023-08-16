<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbeb44efbbd16690538b30a3e1989007a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitbeb44efbbd16690538b30a3e1989007a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbeb44efbbd16690538b30a3e1989007a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbeb44efbbd16690538b30a3e1989007a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}