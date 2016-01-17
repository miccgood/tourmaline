<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $menuHeader;
    protected $template_control = array(
        "menubar" => true,
        "banner" => true,
        "sidebar" => true,
        "footer" => true,
    );
    protected $indexData = array();
    
    function __construct()
    {
        parent::__construct();
//        $this->load->helper('url');
//        $this->load->library('session');
//        $this->load->library('parser');
        $this->load->model('TourmalineModel', "t");
        $this->_init();
//        $this->indexData["template_control"] = $template_control;
//        $this->indexData = array_merge($this->indexData, $this->getIndexData());
    }

    private function _init()
    {
        if($this->getSessionLangSys() == null){
            $this->setSessionLang("_eng");
        }
        $this->output->set_template('tour');
        $this->output->set_title("Tourmaline-Travel.com");
        
        if($this->template_control["menubar"]){
            $menuHeader = $this->getMenuHeader($this->router->fetch_method());
            $this->load->section('menubar', 'pages/template/menubar', 
                array("menu_header" => $menuHeader));
        }
        
        if($this->template_control["banner"]){
            $banner = $this->t->getBanner();
            $this->load->section('banner', 'pages/template/banner', 
                array("banner" => $banner));
        }
         
        if($this->template_control["sidebar"]){
            $lang = $this->getSessionLang();
            $group_category = $this->t->getSideBar($lang);
            $sidebarBoxs = $this->t->getSidebarBoxs();
            $this->load->section('sidebar', 'pages/template/sidebar', 
                array("group_category" => $group_category,
                    "sidebarBoxs" => $sidebarBoxs));
        }
         
        if($this->template_control["footer"]){
            $footer = $this->t->getFooter();
            $this->load->section('footer', 'pages/template/footer', 
                array("footers" => $footer));
        }
        
    }

    public function getMenuHeader($menuHeader = "index") {
        if(isset($this->menuHeader)){
            return $this->menuHeader;
        }
        return ($menuHeader == "index" ? "home" : $menuHeader);
    }
    
//    public function getIndexData(){
//         
////        return array(
////            "group_category" => $group_category,
////            "banner" => $banner,
////            "footers" => $footer);
//    }
    
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
//        echo $this->session->userdata("language_sys");
//        var_dump($this->session->userdata("language_syss"));
    }
    
    private function setSessionLang($lang)
    {
        $this->session->set_userdata("language", $lang);
        $this->setSessionLangSys($lang);
    }
    
    function getSessionLang()
    {
        return $this->session->userdata("language");
    }
    private function setSessionLangSys($lang)
    {
        $lang = str_replace("_", "", $lang);
        if($lang === ""){
            $lang = "th";
        }
        $this->session->set_userdata("language_sys", $lang);
    }
    
    function getSessionLangSys()
    {
        return $this->session->userdata("language_sys");
    }
    
    function sessDestroy()
    {
        $this->session->sess_destroy();
        $this->output->unset_template();
        echo $this->getSessionLang();
    }
    
}




