<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->database();
//        $this->load->helper('url');
//        $this->load->library('grocery_CRUD');
        $this->output->set_template('blank');
//        parent::__construct();
    }

    function index() {
        $this->load->helper(array('form'));
        $this->load->view('login_view');
    }

}

?>