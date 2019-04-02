<?php

class Market extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_about_projects');
    }
    
    public function exports(){
        $data['custom_css'] = 'exports.css';        
        $data['custom_js'] = 'main.js';
        $data['custom_js'] = 'exports.js';
        
        
        $data['content'] = $this->load->view('pages/market/v_exports','', true);
        $this->load->view('main', $data);
    }

    
    public function localMarket(){
        $data['custom_css'] = 'local.css';        
        $data['custom_js'] = 'main.js';
        $data['custom_js'] = 'local_market.js';
        
        
        $data['content'] = $this->load->view('pages/market/v_local','', true);
        $this->load->view('main', $data);
    }
    
    
    public function products(){
        $data['custom_css'] = 'products.css';        
        $data['custom_js'] = 'main.js';
        $data['custom_js'] = 'products_market.js';
        
        
        $data['content'] = $this->load->view('pages/market/v_products','', true);
        $this->load->view('main', $data);
    }
}