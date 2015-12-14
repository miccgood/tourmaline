<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $indexData = array();
    function __construct()
    {
        parent::__construct();
//        $this->load->helper('url');
//        $this->load->library('session');
//        $this->load->library('parser');
        $this->load->model('TourmalineModel', "t");
        $this->_init();
        
        $this->indexData = $this->getIndexData();
    }

    private function _init()
    {
        $this->output->set_template('tour');
    }

    public function getIndexData(){
        $lang = $this->getSessionLang();
        $group_category = $this->t->getSideBar($lang);
        $banner = $this->t->getBanner();
        $footer = $this->t->getFooter();
        
        return array(
            "group_category" => $group_category,
            "banner" => $banner,
            "footers" => $footer);
    }
    
    public function index()
    {
        $this->parser->parse('pages/index', $this->getIndexData());
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



