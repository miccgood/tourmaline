<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller  extends CI_Controller {

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
	}

	public function index()
	{
            $this->parser->parse('pages/index', array());
	}
//	public function example_3()
//	{
//		$this->load->section('sidebar', 'ci_simplicity/sidebar');
//		$this->load->view('ci_simplicity/example_3', array("test" => "testsasdf"));
//                
//                
//            $data = array(
//                    'blog_title'   => 'My Blog Title',
//                    'blog_heading' => 'My Blog Heading',
//                    'blog_entries' => array(
//                            array('title' => 'Title 1', 'body' => 'Body 1'),
//                            array('title' => 'Title 2', 'body' => 'Body 2'),
//                            array('title' => 'Title 3', 'body' => 'Body 3'),
//                            array('title' => 'Title 4', 'body' => 'Body 4'),
//                            array('title' => 'Title 5', 'body' => 'Body 5')
//                    )
//            );
//
////            $this->parser->parse('pages/header', $data);
//
//	}
}
