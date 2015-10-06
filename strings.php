<?php

class Strings
{
    const SECTION_LOGIN = "login";
    const TITLE = "title";
    const LEGEND = "legend";
    const USERNAME = "username";
    const PASSWORD = "password";
    const SUBMIT = "submit";
    const BAD = "bad_login";
    const MISSING_USERNAME = "no_username";
    const MISSING_PASSWORD = "no_password";
    const SUCCESS = "success";
    
    private static $strings;
    
    public static function LoadLanguageFile($filename)
    {
        self::$strings = parse_ini_file($filename,true);
    }
    
    public static function Get($section,$string)
    {
        
        return self::$strings[$section][$string];
    }
}

?>