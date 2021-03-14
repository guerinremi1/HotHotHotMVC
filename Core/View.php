<?php


final class View
{
    public static function openBuffer()
    {
        ob_start();
    }

    public static function getBufferContent()
    {
        return ob_get_clean();
    }

    public static function show ($S_localisation, $A_parameters = array())
    {
        $S_file = Constants::directoryView() . $S_localisation . '.php';

        $A_view = $A_parameters;
        ob_start();
        include $S_file;
        ob_end_flush();
    }

}