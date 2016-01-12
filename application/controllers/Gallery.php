<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends MY_Controller {

    function __construct() {
        $this->menuHeader = "gallery";
        parent::__construct();
    }

    public function index() {
        
        $groupGalleryAll = $this->t->getGroupGalleryAll();
        
//        $lang = $this->getSessionLang();
//
//        $product = array();
//        if ($productId) {
//            $product = $this->t->getProductById($productId);
//            $highLight = $this->t->getHighLightByCategoryId($product["category_id"], $lang);
//
//            $this->indexData["h_header"] = $highLight["g_name"];
//            $this->indexData["s_header"] = $highLight["category_name"];
//        } else {
//            $product = $this->t->getProductHighLight();
//            $this->indexData["h_header"] = "Highlight";
//            $this->indexData["s_header"] = "";
//        }
//        $this->indexData = array_merge($this->indexData , $product);
        
        $this->parser->parse('pages/gallery', array("group_gallerys" => $groupGalleryAll));
        
    }

    public function group($groupId) {
//        $this->load->js("assets/lightbox2-master/dist/js/lightbox.js");
//        $this->load->js("assets/lightbox2-master/dist/js/lightbox-plus-jquery.js");
//        $this->load->css("assets/lightbox2-master/dist/css/lightbox.min.css");
        
        $this->load->js("assets/colorbox-master/jquery.colorbox.js");
        $this->load->js("assets/homepage/js/gallery.js");
        $this->load->css("assets/colorbox-master/colorbox.css");
        
        $gallery = $this->t->getGalleryByGroupId($groupId);
        $galleryGroupName = $this->t->getGroupGalleryNameById($groupId);
        
        $this->parser->parse('pages/gallery', 
                array("gallerys" => $gallery, 
                    "galleryGroupName" => $galleryGroupName
                )
            );
        
    }
}
