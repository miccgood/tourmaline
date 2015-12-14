<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        
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
        
        $this->parser->parse('pages/gallery', $this->indexData);
        
    }

}
