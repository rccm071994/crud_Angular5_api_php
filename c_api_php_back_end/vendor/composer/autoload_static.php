<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23049bdfdd9784a8a8c0d0fe2fa88b26
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'PiramideUploader' => __DIR__ . '/../..' . '/piramide-uploader/PiramideUploader.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit23049bdfdd9784a8a8c0d0fe2fa88b26::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit23049bdfdd9784a8a8c0d0fe2fa88b26::$classMap;

        }, null, ClassLoader::class);
    }
}
