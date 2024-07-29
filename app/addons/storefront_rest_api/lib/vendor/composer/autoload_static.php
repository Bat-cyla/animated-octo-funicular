<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit681e700342a16c652ebcc5083bd7be2d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AppleSignIn\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AppleSignIn\\' => 
        array (
            0 => __DIR__ . '/..' . '/jsoprano/php-apple-signin-php56',
        ),
    );

    public static $classMap = array (
        'AppleSignIn\\ASDecoder' => __DIR__ . '/..' . '/jsoprano/php-apple-signin-php56/ASDecoder.php',
        'AppleSignIn\\Vendor\\JWK' => __DIR__ . '/..' . '/jsoprano/php-apple-signin-php56/Vendor/JWK.php',
        'AppleSignIn\\Vendor\\JWT' => __DIR__ . '/..' . '/jsoprano/php-apple-signin-php56/Vendor/JWT.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit681e700342a16c652ebcc5083bd7be2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit681e700342a16c652ebcc5083bd7be2d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit681e700342a16c652ebcc5083bd7be2d::$classMap;

        }, null, ClassLoader::class);
    }
}