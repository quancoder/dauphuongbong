<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends MY_Controller {

    function __construct() {
        $this->_module = trim(strtolower(__class__));
        parent::__construct();

        $this->load->model('admin/Admin_model');
    }

    function login() {
        //$data = array();

        $this->load->view($this->_template_f . 'admin/login/login_view');
    }

    function shop() {
        //$data = array();
        $listShop = $this->Admin_model->get_all_county_by_province(1, 1);
        $this->load->view($this->_template_f . 'admin/header_view');
        $this->load->view($this->_template_f . 'admin/shop/shop_view');
        $this->load->view($this->_template_f . 'admin/footer_view');
    }
}
