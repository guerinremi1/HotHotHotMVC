<?php

require 'Core/Constants.php';

final class Autoload
{
    public static function loadClassesCore ($S_className)
    {
        $S_file = Constants::directoryCore() . "$S_className.php";
        return static::_load($S_file);
    }

    public static function loadClassesException ($S_className)
    {
        $S_file = Constants::directoryExceptions() . "$S_className.php";

        return static::_load($S_file);
    }

    public static function loadClassesModel ($S_className)
    {
        $S_file = Constants::directoryModel() . "$S_className.php";

        return static::_load($S_file);
    }


    public static function loadClassesView ($S_className)
    {
        $S_file = Constants::directoryView() . "$S_className.php";

        return static::_load($S_file);
    }

    public static function loadClassesController ($S_className)
    {
        $S_file = Constants::directoryController() . "$S_className.php";

        return static::_load($S_file);
    }
    private static function _load ($S_fileToLoad)
    {
        if (is_readable($S_fileToLoad))
        {
            require $S_fileToLoad;
        }
    }




}


spl_autoload_register('Autoload::loadClassesCore');
spl_autoload_register('Autoload::loadClassesException');
spl_autoload_register('Autoload::loadClassesModel');
spl_autoload_register('Autoload::loadClassesView');
spl_autoload_register('Autoload::loadClassesController');