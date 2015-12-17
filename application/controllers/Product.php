<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index($categoryId = null, $productId = null) {
        $lang = $this->getSessionLang();

        $product = array();
        if ($productId) {
            $product = $this->t->getProductById($productId);
            $highLight = $this->t->getHighLightByCategoryId($product["category_id"], $lang);

            $this->indexData["h_header"] = $highLight["g_name"];
            $this->indexData["s_header"] = $highLight["category_name"];
        } else {
            $product = $this->t->getProductHighLight();
            $this->indexData["h_header"] = "Hilight";
            $this->indexData["s_header"] = "";
        }
        $this->indexData = array_merge($this->indexData , $product);
        
        $this->parser->parse('pages/product', $this->indexData);
        
        
        
//        $lang = $this->getSessionLang();
        $products = array();
        if($categoryId){
            $products = $this->t->getProductByCategoryId($categoryId, $lang, $productId);
            $highLight = $this->t->getHighLightByCategoryId($categoryId, $lang);
            
            $this->indexData["h_header"] = "Relation Post";
            $this->indexData["s_header"] = "";
        }
        if(!empty($products)){
            $this->indexData["products"] = $products;
            $this->parser->parse('pages/index', $this->indexData);
        }
    }

}
