<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Application specific global variables
class Constant
{
    private static $upload_icon_path ='assets/themes/default/images/icon-menu/';
    private static $upload_banner_path ='assets/themes/default/images/banner/';

    public static function getUploadIconPath()
    {
        return self::$upload_icon_path;
    }
    public static function getUploadBannerPath()
    {
        return self::$upload_banner_path;
    }
}