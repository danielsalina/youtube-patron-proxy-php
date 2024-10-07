<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5a8b7622184ea10aeefadaec322e50e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Product\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Product\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Product',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5a8b7622184ea10aeefadaec322e50e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5a8b7622184ea10aeefadaec322e50e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita5a8b7622184ea10aeefadaec322e50e::$classMap;

        }, null, ClassLoader::class);
    }
}