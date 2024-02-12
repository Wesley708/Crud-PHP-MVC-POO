<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3613bf0a2590d42b3fafc7abe5fdaa60
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3613bf0a2590d42b3fafc7abe5fdaa60::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3613bf0a2590d42b3fafc7abe5fdaa60::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3613bf0a2590d42b3fafc7abe5fdaa60::$classMap;

        }, null, ClassLoader::class);
    }
}
