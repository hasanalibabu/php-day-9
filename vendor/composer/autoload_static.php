<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit474e525ddb031012f5cbae1898419ddd
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit474e525ddb031012f5cbae1898419ddd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit474e525ddb031012f5cbae1898419ddd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit474e525ddb031012f5cbae1898419ddd::$classMap;

        }, null, ClassLoader::class);
    }
}
