<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TourmalineModel extends CI_Model {

    function __construct()
    {
//        $this->load->model('Model_name');
        parent::__construct();
            $this->load->database();
    }
    
    function getSideBar($lang){
        
            $this->db->select("group_category.id, group_category.icon, group_category.name$lang"
                    . ", category.category_name$lang, category.category_link, category.id as category_id");
            $this->db->from('group_category');
            $this->db->join('category', 'group_category.id = category.g_category_id');
            $this->db->where('group_category.show', 1); 
            $this->db->order_by("group_category.name$lang"); 
            
            $sideBar = $this->db->get()->result_array();
            $group_category = array();
            foreach ($sideBar as $value) {
                $id = $value["id"];
                if (array_key_exists($id, $group_category)) {
                    $category = $group_category[$id];
                    array_push($category->arr, $value["category_name" . $lang]);
                } else {
                    $category = new stdClass();
                    $category->name = $value["name" . $lang];
                    $category->icon = $value["icon"];
                    $category->link = $value["category_link"] . $value["category_id"];
                    $category->arr = array();
                    array_push($category->arr, $value["category_name" . $lang]);
                    $group_category[$id] = $category;
                }
            }
        
        
            return $group_category;
    }
    
    function getBanner(){
        
            $this->db->select("name, link");
            $this->db->from('banner');
            $this->db->where('show', 1); 
            return $this->db->get()->result_array();
    }
    
    function getFooter(){
        
            $this->db->select("*");
            $this->db->from('pages');
            $this->db->like('page_name', 'footer'); 
            
            return $this->db->get()->result_array();
    }
    
    function getProductHighLight(){
//            $crud->columns('product_banner_link', "product_header", 'product_details', 'product_price', "category_id");
            $this->db->select("product.id, product_banner_link, product_header, product_sub_header, product_details, product_price, category_id, star");
            $this->db->from('product');
            $this->db->where('show', 1); 
            $this->db->where('highlight', 1);
            $this->db->order_by('star desc');
            return $this->db->get()->result_array();
    }
    
    function getProductByCategoryId($categoryId, $lang, $productId = null){
//            $crud->columns('product_banner_link', "product_header", 'product_details', 'product_price', "category_id");
            $this->db->select("product.id, product_banner_link, product_header, product_sub_header"
                    . ", product_details, product_price, category_id, star, category.category_name$lang as category_name ");
            $this->db->from('product');
            $this->db->join('category', 'category.id = product.category_id');
            $this->db->where('show', 1); 
            $this->db->where('category_id', $categoryId);
            $this->db->where('product.id <>', $productId);
            $this->db->order_by('star desc');
            return $this->db->get()->result_array();
    }
    
    function getCategoryById($categoryId){
//            $crud->columns('product_banner_link', "product_header", 'product_details', 'product_price', "category_id");
            $this->db->select("*");
            $this->db->from('category');
            $this->db->where('id', $categoryId);
            return $this->db->get()->result_array();
    }
    
    function getHighLightByCategoryId($categoryId, $lang){
//            $crud->columns('product_banner_link', "product_header", 'product_details', 'product_price', "category_id");
            $this->db->select("category.category_name$lang as category_name, group_category.name$lang as g_name");
            $this->db->from('category');
            $this->db->join('group_category', 'group_category.id = category.g_category_id');
            $this->db->where('category.id', $categoryId);
            
            $result_array = $this->db->get()->result_array();
            return $result_array[0];
    }
    
    function getPagesByName($pageName){
//            $crud->columns('product_banner_link', "product_header", 'product_details', 'product_price', "category_id");
            $this->db->select("*");
            $this->db->from('pages');
            $this->db->where('page_name', $pageName);
            $result_array = $this->db->get()->result_array();
            return $result_array[0];
    }
    
    function getProductById($productById){
            $this->db->select("*");
            $this->db->from('product');
            $this->db->where('show', 1); 
            $this->db->where('id', $productById);
            $result_array = $this->db->get()->result_array();
            return $result_array[0];
    }
}