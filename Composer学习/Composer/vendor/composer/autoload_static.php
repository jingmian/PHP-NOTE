<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf0cc8307980a0cca1762247d98c6891
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/class',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInitbf0cc8307980a0cca1762247d98c6891::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
