<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcfddcb2a8e7ce1040fd21accde54c0a9
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'def43f6c87e4f8dfd0c9e1b1bab14fe8' => __DIR__ . '/..' . '/symfony/polyfill-iconv/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPForms\\' => 8,
        ),
        'T' => 
        array (
            'TrueBV\\' => 7,
            'TijsVerkoyen\\CssToInlineStyles\\' => 31,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Iconv\\' => 23,
            'Symfony\\Component\\CssSelector\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPForms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'TrueBV\\' => 
        array (
            0 => __DIR__ . '/..' . '/true/punycode/src',
        ),
        'TijsVerkoyen\\CssToInlineStyles\\' => 
        array (
            0 => __DIR__ . '/..' . '/tijsverkoyen/css-to-inline-styles/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Iconv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-iconv',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
    );

    public static $classMap = array (
        'XLSXWriter' => __DIR__ . '/..' . '/mk-j/php_xlsxwriter/xlsxwriter.class.php',
        'XLSXWriter_BuffererWriter' => __DIR__ . '/..' . '/mk-j/php_xlsxwriter/xlsxwriter.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcfddcb2a8e7ce1040fd21accde54c0a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcfddcb2a8e7ce1040fd21accde54c0a9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcfddcb2a8e7ce1040fd21accde54c0a9::$classMap;

        }, null, ClassLoader::class);
    }
}
