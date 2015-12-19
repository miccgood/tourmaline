<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }
    
    public function index($categoryId = null) {
        $this->indexData["menu_header"] = "home";
        $lang = $this->getSessionLang();
        $products = array();
        if($categoryId){
            $products = $this->t->getProductByCategoryId($categoryId, $lang);
            $highLight = $this->t->getHighLightByCategoryId($categoryId, $lang);
            $groupCategoryId = $this->t->getGroupCategoryId($categoryId);
            
            $this->indexData["groupCategoryId"] = $groupCategoryId["g_category_id"];
            $this->indexData["h_header"] = $highLight["g_name"];
            $this->indexData["s_header"] = $highLight["category_name"];
            
        } else {
            $products = $this->t->getProductHighLight();
            $this->indexData["h_header"] = "Highlights";
            $this->indexData["s_header"] = "";
        }
        $this->indexData["products"] = $products;
        $this->indexData["categoryId"] = $categoryId;
        $this->parser->parse('pages/index', $this->indexData);
    }

    
    public function contact() {
        $this->indexData["menu_header"] = "contact";
        $this->pages("contact");
    }
    
    public function about() {
        $this->indexData["menu_header"] = "about";
        $this->pages("about");
    }
    
    public function pages($page) {
        $page = $this->t->getPagesByName($page);
        
        $this->indexData["h_header"] = $page["page_h_header"];
        $this->indexData["s_header"] = $page["page_s_header"];
        $this->indexData["details"] = $page["page_details"];
        
        $this->parser->parse('pages/page', $this->indexData);
    }
    
    
//    public function getIndexData(){
//        $lang = $this->getSessionLang();
//        $group_category = $this->t->getSideBar($lang);
//        $banner = $this->t->getBanner();
//        return array(
//            "group_category" => $group_category,
//            "banner" => $banner);
//    }
//    
    
}
