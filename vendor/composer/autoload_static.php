<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3a6a93cf1dea4eb51478ee8ab9c23b4
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'Imagine' => 
            array (
                0 => __DIR__ . '/..' . '/imagine/imagine/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitd3a6a93cf1dea4eb51478ee8ab9c23b4::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
