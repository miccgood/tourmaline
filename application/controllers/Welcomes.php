<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcomes extends CI_Controller {

	function __construct()
	{
            parent::__construct();

            $this->load->helper('url');
            
            $this->load->library('parser');
            $this->_init();
	}

	private function _init()
	{
            $this->output->set_template('tour');

//            $this->load->section('sidebar', 'ci_simplicity/sidebar');
                
	}

	public function index()
	{
//            $this->output->set_template('test');
            $this->parser->parse('pages/index', array());

	}
}
