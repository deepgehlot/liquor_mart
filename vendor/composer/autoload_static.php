<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ad97ebbacb1cdf22f8698664365969a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ad97ebbacb1cdf22f8698664365969a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ad97ebbacb1cdf22f8698664365969a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2ad97ebbacb1cdf22f8698664365969a::$classMap;

        }, null, ClassLoader::class);
    }
}