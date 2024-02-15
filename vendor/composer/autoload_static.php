<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdcd9c46c54648f53106562b328fecd9e
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WafaCode\\Belajar\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WafaCode\\Belajar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdcd9c46c54648f53106562b328fecd9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdcd9c46c54648f53106562b328fecd9e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdcd9c46c54648f53106562b328fecd9e::$classMap;

        }, null, ClassLoader::class);
    }
}