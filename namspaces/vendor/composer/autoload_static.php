<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit088ed19c8d3fb9f7836c4787b12c3edc
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rych\\Random' => 
            array (
                0 => __DIR__ . '/..' . '/rych/random',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit088ed19c8d3fb9f7836c4787b12c3edc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
