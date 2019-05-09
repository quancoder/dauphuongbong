<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cuahang extends MY_Controller {

    function __construct() {
        $this->_module = trim(strtolower(__class__));
        parent::__construct();
    }

    function index() {
        //$data = array();
        $this->_loadHeader();
        $this->load->view($this->_template_f . 'cuahang/cuahang_view');
        $this->_loadFooter();
    }
}
