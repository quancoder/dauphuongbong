<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Daungon extends MY_Controller {

    function __construct() {
        $this->_module = trim(strtolower(__class__));
        parent::__construct();
        
        $this->load->model('product/Product_model');
    }

    function index() {
        $data = array();
        $data['arr_product'] = $this->Product_model->dp_product_get_all();
        $this->_loadHeader();
        $this->load->view($this->_template_f . 'daungon/daungon_view', $data);
        $this->_loadFooter();
    }
}
