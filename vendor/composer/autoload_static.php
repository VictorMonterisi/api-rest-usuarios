<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc707a521f211397fdd5fc403e824117d
{
    public static $files = array (
        '85708ffe0419eea6afee4e7cb62d7f79' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Victo\\ApiRestExercicio\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Victo\\ApiRestExercicio\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc707a521f211397fdd5fc403e824117d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc707a521f211397fdd5fc403e824117d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc707a521f211397fdd5fc403e824117d::$classMap;

        }, null, ClassLoader::class);
    }
}
