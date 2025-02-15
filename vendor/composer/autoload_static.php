<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a99a9d78beaee3052423a875832ad3f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'ShortcodeOptions\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ShortcodeOptions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/ShortcodeOptions',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ShortcodeOptions\\Lang' => __DIR__ . '/../..' . '/src/ShortcodeOptions/Lang.php',
        'ShortcodeOptions\\Plugin' => __DIR__ . '/../..' . '/src/ShortcodeOptions/Plugin.php',
        'ShortcodeOptions\\Traits\\Singleton' => __DIR__ . '/../..' . '/src/ShortcodeOptions/Traits/Singleton.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a99a9d78beaee3052423a875832ad3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a99a9d78beaee3052423a875832ad3f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a99a9d78beaee3052423a875832ad3f::$classMap;

        }, null, ClassLoader::class);
    }
}
