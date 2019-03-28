<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $_template_f = '';
    protected $_langcode = '';
    protected $_langcodeid = '';
    protected $_module = '';
    protected $_function = '';
    protected $_product_name = '';
    protected $_numShowItem = 30;

    public function __construct() {
        parent::__construct();
        $this->_langcode = get_langcode();
        $this->_langcodeid = get_langcode_id($this->_langcode);

        $this->_template_f = $this->config->item('template_f');
        $this->load->language('common', $this->_langcode);


        // init and assign common value to view: language, common lang
        $preHeader = array();
        $preHeader['product_name'] = $this->_product_name;
        $preHeader['common_lang'] = $this->lang->line('common');
        $preHeader['langcode'] = $this->_langcode;
        $preHeader['langcodeid'] = $this->_langcodeid;
        $preHeader['template_f'] = $this->_template_f;
        $preHeader['fullname'] = '';
        $preHeader['userid'] = '';
        $preHeader['role'] = '';
        $preHeader['langcode_url'] = '';
        $preHeader['isLogin'] = false;
        $preHeader['module_name'] = $this->_module;

        // set lang code for multi language url
        $arrLang = $this->config->item('lang_uri_abbr');
        $langcodeUrl = '';

        $preHeader['langcode_url'] = $langcodeUrl;

        if ($this->_isLogin()) {
            $preHeader['userid'] = $this->_session_uid();
            $preHeader['role'] = $this->_session_role();
            $preHeader['isLogin'] = true;
        }

        // assign all common param to view
        $this->load->view($this->_template_f . 'preheader_view', $preHeader);
    }

    protected function _loadHeader($data = null, $isLoadHeader = true) {
        $header = array();
        $header['title'] = isset($data['title']) ? $data['title'] : '';
        $header['metaTitle'] = isset($data['metaTitle']) ? $data['metaTitle'] : '';
        $header['metaKeyword'] = isset($data['metaKeyword']) ? $data['metaKeyword'] : '';
        $header['metaDesc'] = isset($data['metaDesc']) ? $data['metaDesc'] : '';
        $header['isLoadHeader'] = $isLoadHeader;
        
        // load header
        $this->load->view($this->_template_f . 'header_view', $header);
    }
    protected function _loadHeaderNav($data = null, $isLoadHeader = true) {
        $header = array();
        $header['title'] = isset($data['title']) ? $data['title'] : '';
        $header['metaTitle'] = isset($data['metaTitle']) ? $data['metaTitle'] : '';
        $header['metaKeyword'] = isset($data['metaKeyword']) ? $data['metaKeyword'] : '';
        $header['metaDesc'] = isset($data['metaDesc']) ? $data['metaDesc'] : '';
        $header['img'] = isset($data['img']) ? $data['img'] : '';
        $header['isLoadHeader'] = $isLoadHeader;
        
        // load header
        $this->load->view($this->_template_f . 'header_nav_view', $header);
    }

    protected function _loadError404($data = null) {
        $header = array();
        $header['title'] = isset($data['title']) ? $data['title'] : '';
        $header['metaTitle'] = isset($data['metaTitle']) ? $data['metaTitle'] : '';
        $header['metaKeyword'] = isset($data['metaKeyword']) ? $data['metaKeyword'] : '';
        $header['metaDesc'] = isset($data['metaDesc']) ? $data['metaDesc'] : '';

        // load header
        $header['msg'] = isset($data['msg']) ? $data['msg'] : '';
        $header['link'] = isset($data['link']) ? $data['link'] : site_url();
        $this->load->view($this->_template_f . 'error_404', $header);
    }

    protected function _loadFooter() {
        $this->load->view($this->_template_f . 'footer_view');
    }
    
    protected function _loadHeaderPollicy() {
        $data = array();
        $this->load->model('setup/Setup_model');
        $data['setup'] = $this->Setup_model->st_setup_get_info(1);
        $this->load->view($this->_template_f . 'header_pollicy_vew', $data);
    }


    protected function _session_uid() {
        $user_id = trim($this->session->userdata('userid'));
        $user_id = isIdNumber($user_id) ? $user_id : 0;
        return $user_id;
    }

    protected function _session_role() {
        $role = trim($this->session->userdata('role'));
        $role = $role >= -1 && $role <= 10 && is_numeric($role) ? $role : 3;
        return $role;
    }

    protected function _session_fullname() {
        $uname = $this->session->userdata('lastname') . ' ' . $this->session->userdata('firstname');
        return $uname;
    }

    protected function _isLogin() {
        $user_id = $this->_session_uid();
        $firstname = $this->_session_fullname();
        return ($user_id > 0 && $firstname != '') ? true : false;
    }

    protected function _isAdmin() {
        // only admin can switch user
        if ($this->_session_isp() > 0) {
            return true;
        }

        $role = $this->_session_role();
        if ($role == -1 || $role == 8) {
            return true;
        } else {
            return false;
        }
    }

    protected function _isPost() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            return true;
        }
        return false;
    }

}
