<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit689c329d53331a5890bace33eadd48a0
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit689c329d53331a5890bace33eadd48a0::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit689c329d53331a5890bace33eadd48a0::$classMap;

        }, null, ClassLoader::class);
    }
}
