<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit292c772e6aa695a3d4d89a98628a5c35
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Object\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Object\\' => 
        array (
            0 => __DIR__ . '/../..' . '/object',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit292c772e6aa695a3d4d89a98628a5c35::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit292c772e6aa695a3d4d89a98628a5c35::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
