<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4324eddb3f90449d11f3ba9f1650350
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/classes',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4324eddb3f90449d11f3ba9f1650350::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4324eddb3f90449d11f3ba9f1650350::$prefixDirsPsr4;
            $loader->fallbackDirsPsr0 = ComposerStaticInite4324eddb3f90449d11f3ba9f1650350::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
