<?php
/**
 * Date: 2017/8/30
 * Time: 12:01
 */

class autoload
{
    private static $loader;

    public static function loadClass()
    {
        if(null !== self::$loader ){
            return self::$loader;
        }

        self::$loader = $loader = new ClassLoader();


    }

    public static function run()
    {

    }
}


class ClassLoader
{

}