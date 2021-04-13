<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87ef236e7e091a0eec5740d3493c203d
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'api\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'api\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit87ef236e7e091a0eec5740d3493c203d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87ef236e7e091a0eec5740d3493c203d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit87ef236e7e091a0eec5740d3493c203d::$classMap;

        }, null, ClassLoader::class);
    }
}
