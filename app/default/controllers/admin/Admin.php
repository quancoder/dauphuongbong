<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends MY_Controller {

    function __construct() {
        $this->_module = trim(strtolower(__class__));
        parent::__construct();
    }

    function map() {
        //$data = array();

        $this->load->view($this->_template_f . 'admin/header_view');
        $this->load->view($this->_template_f . 'admin/map/map_view');
        $this->load->view($this->_template_f . 'admin/footer_view');
    }

    function login() {
        //$data = array();

        $this->load->view($this->_template_f . 'admin/login/login_view');
    }
}
