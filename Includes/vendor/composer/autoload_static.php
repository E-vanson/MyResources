<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54d4011a96d337c1dc87ed8b4f832207
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54d4011a96d337c1dc87ed8b4f832207::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54d4011a96d337c1dc87ed8b4f832207::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54d4011a96d337c1dc87ed8b4f832207::$classMap;

        }, null, ClassLoader::class);
    }
}
