<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1bb55b1a39f95ed0dabfe2376ed58de
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1bb55b1a39f95ed0dabfe2376ed58de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1bb55b1a39f95ed0dabfe2376ed58de::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita1bb55b1a39f95ed0dabfe2376ed58de::$classMap;

        }, null, ClassLoader::class);
    }
}
