<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4fe4bc9ba737a91d65509dff2c953721
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4fe4bc9ba737a91d65509dff2c953721::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4fe4bc9ba737a91d65509dff2c953721::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4fe4bc9ba737a91d65509dff2c953721::$classMap;

        }, null, ClassLoader::class);
    }
}
