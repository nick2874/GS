<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9e0203b8785bf023edca865821b1809
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nick\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nick\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Nick\\A\\A' => __DIR__ . '/../..' . '/A/A.php',
        'Nick\\B\\A' => __DIR__ . '/../..' . '/B/B.php',
        'Nick\\C\\A' => __DIR__ . '/../..' . '/C/C.php',
        'Nick\\Controllers\\Nika' => __DIR__ . '/../..' . '/Controllers/Nika.php',
        'Nick\\Libraries\\Controller' => __DIR__ . '/../..' . '/Libraries/Controller.php',
        'Nick\\Libraries\\Core' => __DIR__ . '/../..' . '/Libraries/Core.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9e0203b8785bf023edca865821b1809::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9e0203b8785bf023edca865821b1809::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9e0203b8785bf023edca865821b1809::$classMap;

        }, null, ClassLoader::class);
    }
}
