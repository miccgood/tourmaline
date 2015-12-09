<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends MY_Controller{

	public function thai1()
	{
            $this->parser->parse('pages/index', array());
	}
}
