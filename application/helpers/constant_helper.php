<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Application specific global variables
class Constant
{
    private static $upload_image_path ='assets/themes/default/images/';
    private static $upload_icon_path ='assets/themes/default/images/icon-menu/';
    private static $upload_banner_path ='assets/themes/default/images/banner/';
    private static $upload_product_banner_path ='assets/themes/default/images/product/';
    private static $upload_product_pdf_path ='assets/themes/default/images/pdf';
    private static $upload_gallery_path ='assets/themes/default/images/gallery';
    private static $limit_value = 10;

    public static function getImagePath($ext = "")
    {
        return self::$upload_image_path.$ext;
    }
    public static function getUploadIconPath($ext = "")
    {
        return self::$upload_icon_path.$ext;
    }
    public static function getUploadBannerPath($ext = "")
    {
        return self::$upload_banner_path.$ext;
    }
    public static function getUploadProductBannerPath($ext = "")
    {
        return self::$upload_product_banner_path.$ext;
    }
    public static function getUploadProductPdfPath($ext = "")
    {
        return self::$upload_product_pdf_path.$ext;
    }
    
    public static function getUploadGalleryPath($ext = "")
    {
        return self::$upload_gallery_path.$ext;
    }
    
    public static function getLimitValue()
    {
        return self::$limit_value;
    }
}