<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitef7b88aa31dddb5927d7dae33c0220db
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

        spl_autoload_register(array('ComposerAutoloaderInitef7b88aa31dddb5927d7dae33c0220db', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitef7b88aa31dddb5927d7dae33c0220db', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitef7b88aa31dddb5927d7dae33c0220db::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
