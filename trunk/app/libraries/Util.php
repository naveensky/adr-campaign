<?php
/**
 * Created by JetBrains PhpStorm.
 * User: keshav
 * Date: 28/8/13
 * Time: 3:16 PM
 * To change this template use File | Settings | File Templates.
 */

class Util
{

    public static function GUID()
    {

        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }

        return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
    }
}