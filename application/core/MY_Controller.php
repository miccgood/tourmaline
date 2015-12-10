<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
//        $this->load->helper('url');
//        $this->load->library('session');
//        $this->load->library('parser');
        $this->load->model('TourmalineModel', "t");
        $this->_init();
    }

    private function _init()
    {
        $this->output->set_template('tour');
    }

    public function index()
    {
        $lang = $this->getSessionLang();
        $sideBar = $this->t->getSideBar($lang);
        $group_category = array();
        foreach ($sideBar as $value) {
            $id = $value["id"];
            if(array_key_exists($id, $group_category)){
                $category = $group_category[$id];
                array_push($category->arr,  $value["category_name" . $lang]);
            } else {
                $category = new stdClass();
                $category->name = $value["name" . $lang];
                $category->icon = $value["icon"];
                $category->arr = array();
                array_push($category->arr,  $value["category_name" . $lang]);
                $group_category[$id] = $category;
            }
        }

        
        $banner = $this->t->getBanner();
        
        $this->parser->parse('pages/index', array(
            "group_category" => $group_category,
            "banner" => $banner));
    }
    
    public function setLang($lang)
    {
        switch ($lang) {
            case 'th':
                $this->setSessionLang("");
                break;
            case 'en':
                $this->setSessionLang("_eng");
                break;
            default:
                break;
        }
        $this->output->unset_template();
        echo $this->getSessionLang();
    }
    
    private function setSessionLang($lang)
    {
        $this->session->set_userdata("language", $lang);
    }
    
    function getSessionLang()
    {
        return $this->session->userdata("language");
    }
}



