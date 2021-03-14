<?php


class Constants
{

    const DIRECTORY_VIEW        = '/View/';

    const DIRECTORY_EXCEPTIONS  = '/Core/Exceptions/';

    const DIRECTORY_MODEL      = '/Model/';

    const DIRECTORY_CORE      = '/Core/';

    const DIRECTORY_CONTROLLER = '/Controller/';


    public static function rootDirectory() {
        return realpath(__DIR__ . '/../');
    }

    public static function directoryExceptions() {
        return self::rootDirectory() . self::DIRECTORY_EXCEPTIONS;
    }

    public static function directoryCore() {
        return self::rootDirectory() . self::DIRECTORY_CORE;
    }

    public static function directoryView() {
        return self::rootDirectory() . self::DIRECTORY_VIEW;
    }

    public static function directoryModel() {
        return self::rootDirectory() . self::DIRECTORY_MODEL;
    }

    public static function directoryController() {
        return self::rootDirectory() . self::DIRECTORY_CONTROLLER;
    }

}