<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit349436b0b0ded6fc27e2cc9c9a233852
{
    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit349436b0b0ded6fc27e2cc9c9a233852::$classMap;

        }, null, ClassLoader::class);
    }
}
