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

    function dia_chi() {
        $data = array();
        $allProvince = $this->Admin_model->get_all_province(1);
        $data['allProvince'] = $allProvince;
        $this->load->view($this->_template_f . 'admin/header_view');
        $this->load->view($this->_template_f . 'admin/dia_chi/dia_chi_view', $data);
        $this->load->view($this->_template_f . 'admin/footer_view');
    }
}
