<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TourmalineModel extends CI_Model {

    function __construct()
    {
//        $this->load->model('Model_name');
        parent::__construct();
            $this->load->database();
    }
    
    function getSideBar($lang){
        
            $this->db->select("group_category.id, group_category.icon, group_category.name$lang, category.category_name$lang");
            $this->db->from('group_category');
            $this->db->join('category', 'group_category.id = category.g_category_id');
            $this->db->where('group_category.show', 1); 
            return $this->db->get()->result_array();
    }
    
    function getBanner(){
        
            $this->db->select("name, link");
            $this->db->from('banner');
            $this->db->where('show', 1); 
            return $this->db->get()->result_array();
    }
    
    
}