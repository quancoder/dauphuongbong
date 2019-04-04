<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    function __construct() {
        $this->_module = trim(strtolower(__class__));
        parent::__construct();
        $this->load->model('product/Product_model');
    }

    function index() {
        //$this->_loadHeader();
        $this->_loadHeader();
        $this->load->view($this->_template_f . 'home/home_view');
        $this->_loadFooter();
    }
}
