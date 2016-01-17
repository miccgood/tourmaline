<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class TourmalineModel extends CI_Model {

    function __construct() {
//        $this->load->model('Model_name');
        parent::__construct();
        $this->load->database();
    }

    function login($username, $password) {
        $this->db->select('id, username, password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function getGalleryByGroupId($groupId) {
        $this->db->select("*");
        $this->db->from('gallery');
        $this->db->where("group_gallery_id", $groupId);
        $this->db->order_by("gallery_priority");
//        $this->db->where('group_category.show', 1);
//        $this->db->order_by("group_category.name$lang");
//        $this->db->where('id', $categoryId);

        return $this->db->get()->result_array();
    }

    
    function getGroupGalleryNameById($groupId) {
        $this->db->select("group_gallery.group_gallery_name");
        $this->db->from('group_gallery');
        $this->db->where('group_gallery.id', $groupId);

        $result_array = $this->db->get()->result_array();
        return $result_array[0]["group_gallery_name"];
    }
    
    function getGroupGalleryAll() {
        $this->db->select("group_gallery.id, group_gallery.group_gallery_name, gallery.gallery_priority, gallery.gallery_link");
        $this->db->from('group_gallery');

        $this->db->join('gallery', 'group_gallery.id = gallery.group_gallery_id');
        $this->db->group_by("group_gallery.id, group_gallery.group_gallery_name, gallery.gallery_priority");
        $this->db->having("1 = min(gallery_priority)");
        $this->db->order_by("gallery_priority");
//        $this->db->where('group_category.show', 1);
//        $this->db->order_by("group_category.name$lang");
//        $this->db->where('id', $categoryId);

        return $this->db->get()->result_array();
    }

    function getGroupCategoryId($categoryId) {

        $this->db->select("g_category_id");
        $this->db->from('category');
        $this->db->where('id', $categoryId);

        $result_array = $this->db->get()->result_array();
        return $result_array[0];
    }

    function getSideBar($lang) {

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
                array_push($category->arr, array("name" => $value["category_name" . $lang]
                    , "link" => $value["category_link"] . $value["category_id"]));
            } else {
                $category = new stdClass();
                $category->name = $value["name" . $lang];
                $category->icon = $value["icon"];
//                    $category->link = $value["category_link"] . $value["category_id"];
                $category->arr = array();
                array_push($category->arr, array("name" => $value["category_name" . $lang]
                    , "link" => $value["category_link"] . $value["category_id"]));
                $group_category[$id] = $category;
            }
        }


        return $group_category;
    }

    function getBanner() {

        $this->db->select("name, link");
        $this->db->from('banner');
        $this->db->where('show', 1);
        return $this->db->get()->result_array();
    }

    function getFooter() {

        $this->db->select("*");
        $this->db->from('pages');
        $this->db->like('page_name', 'footer');

        return $this->db->get()->result_array();
    }
    

    function getSidebarBoxs() {

        $this->db->select("*");
        $this->db->from('pages');
        $this->db->like('page_name', 'sidebar', 'after'); 
        $this->db->order_by('page_name'); 

        return $this->db->get()->result_array();
    }

    function getProductHighLight($page) {
        $limitValue = Constant::getLimitValue();
        return $this->dbProductHighLight()
                        ->limit($limitValue, $limitValue * $page)
                        ->get()
                        ->result_array();
    }

    function countProductHighLight() {

        return $this->dbProductHighLight()
                        ->count_all_results();
    }

    private function dbProductHighLight() {
//            $crud->columns('product_banner_link', "product_header", 'product_details', 'product_price', "category_id");
        $this->db->select("product.id, product_banner_link, product_header, product_sub_header, product_details, product_price, category_id, star");
        $this->db->from('product');
        $this->db->where('show', 1);
        $this->db->where('highlight', 1);
//        $this->db->limit($this->limitValue, $this->limitValue * $page);
        $this->db->order_by('star desc');
        return $this->db;
//        return $this->db->get()->result_array();
    }

//    count_all_results

    function getProductByCategoryId($categoryId, $lang, $productId = null, $page = 0) {

        $limitValue = Constant::getLimitValue();
        return $this->dbProductByCategoryId($categoryId, $lang, $productId)
                        ->limit($limitValue, $limitValue * $page)
                        ->get()
                        ->result_array();
    }

    function countProductByCategoryId($categoryId, $lang, $productId = null) {

        return $this->dbProductByCategoryId($categoryId, $lang, $productId)
                        ->count_all_results();
    }

    private function dbProductByCategoryId($categoryId, $lang, $productId = null) {

        $this->db->select("product.id, product_banner_link, product_header, product_sub_header"
                . ", product_details, product_price, category_id, star, category.category_name$lang as category_name ");
        $this->db->from('product');
        $this->db->join('category', 'category.id = product.category_id');
        $this->db->where('show', 1);
        $this->db->where('category_id', $categoryId);
        $this->db->where('product.id <>', $productId);
//        $this->db->limit($this->limitValue, $this->limitValue * $page);
        $this->db->order_by('star desc');

        return $this->db;
//        return $this->db->get()->result_array();
    }

    function getCategoryById($categoryId) {
//            $crud->columns('product_banner_link', "product_header", 'product_details', 'product_price', "category_id");
        $this->db->select("*");
        $this->db->from('category');
        $this->db->where('id', $categoryId);
        return $this->db->get()->result_array();
    }

    function getHighLightByCategoryId($categoryId, $lang) {
//            $crud->columns('product_banner_link', "product_header", 'product_details', 'product_price', "category_id");
        $this->db->select("category.category_name$lang as category_name, group_category.name$lang as g_name");
        $this->db->from('category');
        $this->db->join('group_category', 'group_category.id = category.g_category_id');
        $this->db->where('category.id', $categoryId);

        $result_array = $this->db->get()->result_array();
        return $result_array[0];
    }

    function getPagesByName($pageName) {
//            $crud->columns('product_banner_link', "product_header", 'product_details', 'product_price', "category_id");
        $this->db->select("*");
        $this->db->from('pages');
        $this->db->where('page_name', $pageName);
        $result_array = $this->db->get()->result_array();
        return $result_array[0];
    }

    function getProductById($productById) {
        $this->db->select("*");
        $this->db->from('product');
        $this->db->where('show', 1);
        $this->db->where('id', $productById);
        $result_array = $this->db->get()->result_array();
        return $result_array[0];
    }

}
