<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5609b955cabd4b040eb6ad8bb56d5718
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Atm\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Atm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Atm',
        ),
    );

    public static $classMap = array (
        'Atm\\Core\\Atm' => __DIR__ . '/../..' . '/app/Atm/Core/Atm.php',
        'Atm\\Data\\File' => __DIR__ . '/../..' . '/app/Atm/Data/File.php',
        'Atm\\Money\\Currencies' => __DIR__ . '/../..' . '/app/Atm/Money/Currencies.php',
        'Atm\\Taxes\\Taxes' => __DIR__ . '/../..' . '/app/Atm/Taxes/Taxes.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5609b955cabd4b040eb6ad8bb56d5718::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5609b955cabd4b040eb6ad8bb56d5718::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5609b955cabd4b040eb6ad8bb56d5718::$classMap;

        }, null, ClassLoader::class);
    }
}