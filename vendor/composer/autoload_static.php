<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9293622a5d56300d5040d565a5af2b38
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9293622a5d56300d5040d565a5af2b38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9293622a5d56300d5040d565a5af2b38::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9293622a5d56300d5040d565a5af2b38::$classMap;

        }, null, ClassLoader::class);
    }
}
