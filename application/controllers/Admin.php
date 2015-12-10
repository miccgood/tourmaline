<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
//        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->output->set_template('admin');
    }

    private function getCrud() {
        $crud = new grocery_CRUD();
        $crud->set_theme('datatables');
        return $crud;
    }
    public function banner() {
        try {
            
            $lang = $this->getSessionLang();
            $crud = $this->getCrud();
            $crud->set_table('banner');
            $crud->set_subject('Banner');
            $crud->columns('name', 'link', 'show');
            
            $crud->field_type('show','true_false');
            $crud->set_field_upload('link', Constant::getUploadBannerPath());
            
            $output = $crud->render();
            $this->output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }
    
    public function category() {
        try {
            
            $lang = $this->getSessionLang();
        
            $crud = $this->getCrud();
            $crud->set_table('category');
            $crud->set_subject('Category');
            $crud->columns('g_category_id', 'category_name', 'category_name_eng' );
            
            $crud->set_relation('g_category_id','group_category','name'.$lang);
            
            $crud->display_as('category_name', 'Name');
            $crud->display_as('category_name_eng', 'Name Eng');
            $crud->display_as('g_category_id', 'Group');
            $output = $crud->render();
            $this->output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function group() {
        try {
            $crud = $this->getCrud();
            $crud->set_table('group_category');
            $crud->set_subject('Group');
            $crud->columns('icon', 'name', 'name_eng', 'show');
            $crud->field_type('show','true_false');
            $crud->set_field_upload('icon', Constant::getUploadIconPath());
            
            $crud->callback_after_upload(array($this, 'callback_after_upload'));
            $output = $crud->render();
            $this->output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function callback_before_update($post_array, $primary_key, $rows) {
        $this->load->library('image_moo');
        //Is only one file uploaded so it ok to use it with $uploader_response[0].
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)->resize(25, 25)->save($file_uploaded, true);
        return true;
    }

    function callback_before_upload($files_to_upload, $field_info) {
        /*
         * Examples of what the $files_to_upload and $field_info will be:    
          $files_to_upload = Array
          (
          [sd1e6fec1] => Array
          (
          [name] => 86.jpg
          [type] => image/jpeg
          [tmp_name] => C:\wamp\tmp\phpFC42.tmp
          [error] => 0
          [size] => 258177
          )

          )

          $field_info = stdClass Object
          (
          [field_name] => file_url
          [upload_path] => assets/uploads/files
          [encrypted_field_name] => sd1e6fec1
          )

         */


        if (is_dir($field_info->upload_path)) {
            return true;
        } else {
            return 'I am sorry but it seems that the folder that you are trying to upload doesn\'t exist.';
        }
    }

    function callback_after_upload($uploader_response, $field_info, $files_to_upload) {
//        $this->load->library('image_moo');
        //Is only one file uploaded so it ok to use it with $uploader_response[0].
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;

//        $this->image_moo->load($file_uploaded)->resize(800, 600)->save($file_uploaded, true);

        return true;
    }

    public function output($output = null) {

//            $this->output->set_template('admin');
        $this->load->view('pages/blank.php', $output);
    }

    public function offices() {
        $output = $this->grocery_crud->render();

        $this->output($output);
    }

    public function index() {
        $this->output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function offices_management() {
        try {
            $crud = new grocery_CRUD();

            $crud->set_theme('datatables');
            $crud->set_table('offices');
            $crud->set_subject('Office');
            $crud->required_fields('city');
            $crud->columns('city', 'country', 'phone', 'addressLine1', 'postalCode');

            $output = $crud->render();

            $this->output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function employees_management() {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('employees');
        $crud->set_relation('officeCode', 'offices', 'city');
        $crud->display_as('officeCode', 'Office City');
        $crud->set_subject('Employee');

        $crud->required_fields('lastName');

        $crud->set_field_upload('file_url', 'assets/uploads/files');

        $output = $crud->render();

        $this->output($output);
    }

    public function customers_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('customers');
        $crud->columns('customerName', 'contactLastName', 'phone', 'city', 'country', 'salesRepEmployeeNumber', 'creditLimit');
        $crud->display_as('salesRepEmployeeNumber', 'from Employeer')
                ->display_as('customerName', 'Name')
                ->display_as('contactLastName', 'Last Name');
        $crud->set_subject('Customer');
        $crud->set_relation('salesRepEmployeeNumber', 'employees', 'lastName');

        $output = $crud->render();

        $this->output($output);
    }

    public function orders_management() {
        $crud = new grocery_CRUD();

        $crud->set_relation('customerNumber', 'customers', '{contactLastName} {contactFirstName}');
        $crud->display_as('customerNumber', 'Customer');
        $crud->set_table('orders');
        $crud->set_subject('Order');
        $crud->unset_add();
        $crud->unset_delete();

        $output = $crud->render();

        $this->output($output);
    }

    public function products_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('products');
        $crud->set_subject('Product');
        $crud->unset_columns('productDescription');
        $crud->callback_column('buyPrice', array($this, 'valueToEuro'));

        $output = $crud->render();

        $this->output($output);
    }

    public function valueToEuro($value, $row) {
        return $value . ' &euro;';
    }

    public function film_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('film');
        $crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname', 'priority');
        $crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
        $crud->unset_columns('special_features', 'description', 'actors');

        $crud->fields('title', 'description', 'actors', 'category', 'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

        $output = $crud->render();

        $this->output($output);
    }

    public function film_management_twitter_bootstrap() {
        try {
            $crud = new grocery_CRUD();

            $crud->set_theme('twitter-bootstrap');
            $crud->set_table('film');
            $crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname', 'priority');
            $crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
            $crud->unset_columns('special_features', 'description', 'actors');

            $crud->fields('title', 'description', 'actors', 'category', 'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

            $output = $crud->render();
            $this->output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function multigrids() {
        $this->config->load('grocery_crud');
        $this->config->set_item('grocery_crud_dialog_forms', true);
        $this->config->set_item('grocery_crud_default_per_page', 10);

        $output1 = $this->offices_management2();

        $output2 = $this->employees_management2();

        $output3 = $this->customers_management2();

        $js_files = $output1->js_files + $output2->js_files + $output3->js_files;
        $css_files = $output1->css_files + $output2->css_files + $output3->css_files;
        $output = "<h1>List 1</h1>" . $output1->output . "<h1>List 2</h1>" . $output2->output . "<h1>List 3</h1>" . $output3->output;

        $this->output((object) array(
                    'js_files' => $js_files,
                    'css_files' => $css_files,
                    'output' => $output
        ));
    }

    public function offices_management2() {
        $crud = new grocery_CRUD();
        $crud->set_table('offices');
        $crud->set_subject('Office');

        $crud->set_crud_url_path(site_url(strtolower(__CLASS__ . "/" . __FUNCTION__)), site_url(strtolower(__CLASS__ . "/multigrids")));

        $output = $crud->render();

        if ($crud->getState() != 'list') {
            $this->output($output);
        } else {
            return $output;
        }
    }

    public function employees_management2() {
        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('employees');
        $crud->set_relation('officeCode', 'offices', 'city');
        $crud->display_as('officeCode', 'Office City');
        $crud->set_subject('Employee');

        $crud->required_fields('lastName');

        $crud->set_field_upload('file_url', 'assets/uploads/files');

        $crud->set_crud_url_path(site_url(strtolower(__CLASS__ . "/" . __FUNCTION__)), site_url(strtolower(__CLASS__ . "/multigrids")));

        $output = $crud->render();

        if ($crud->getState() != 'list') {
            $this->output($output);
        } else {
            return $output;
        }
    }

    public function customers_management2() {
        $crud = new grocery_CRUD();

        $crud->set_table('customers');
        $crud->columns('customerName', 'contactLastName', 'phone', 'city', 'country', 'salesRepEmployeeNumber', 'creditLimit');
        $crud->display_as('salesRepEmployeeNumber', 'from Employeer')
                ->display_as('customerName', 'Name')
                ->display_as('contactLastName', 'Last Name');
        $crud->set_subject('Customer');
        $crud->set_relation('salesRepEmployeeNumber', 'employees', 'lastName');

        $crud->set_crud_url_path(site_url(strtolower(__CLASS__ . "/" . __FUNCTION__)), site_url(strtolower(__CLASS__ . "/multigrids")));

        $output = $crud->render();

        if ($crud->getState() != 'list') {
            $this->output($output);
        } else {
            return $output;
        }
    }

}
