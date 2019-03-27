<?php

class About extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
    }
    
    
    public function index(){
        
    }
    
    
    // 
    public function about_comp(){
        $data['custom_css'] = 'about.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/about/v_about','', true);
        $this->load->view('main', $data);
    }
    
    // 
    public function mission(){
        $data['custom_css'] = 'about.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/about/v_mission','', true);
        $this->load->view('main', $data);
    }
    
    //
    public function policy(){
        $data['custom_css'] = 'about.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/about/v_policy','', true);
        $this->load->view('main', $data);
    }
    
    //
    public function plants(){
        $data['custom_css'] = 'about.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/about/v_plants','', true);
        $this->load->view('main', $data);
    }
    //
    
    public function projects(){
        $data['custom_css'] = 'about.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/about/v_projects','', true);
        $this->load->view('main', $data);
    }
    //
    public function certificates(){
        $data['custom_css'] = 'about.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/about/v_certificates','', true);
        $this->load->view('main', $data);
    }
}
