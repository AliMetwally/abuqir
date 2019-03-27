<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Investors
 *
 * @author dev7
 */
class Investors extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('m_finantial');
    }
    
    // investors relations page 
    public function index(){
        $this->brief();
    }
    
    public function brief(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/investors/v_brief','', true);
        $this->load->view('main', $data);
    }
    
    public function shareholders(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/investors/v_shareholders','', true);
        $this->load->view('main', $data);
    }
    
    public function board(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/investors/v_board','', true);
        $this->load->view('main', $data);
    }
    
    public function audit(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/investors/v_audit','', true);
        $this->load->view('main', $data);
    }
    
    public function finantial(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/investors/v_finantial','', true);
        $this->load->view('main', $data);
    }
    
    public function summary(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/investors/v_summary','', true);
        $this->load->view('main', $data);
    }
    
    public function association(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/investors/v_association','', true);
        $this->load->view('main', $data);
    }
    
    public function distibutions(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/investors/v_distibutions','', true);
        $this->load->view('main', $data);
    }
    
    public function budget(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/investors/v_budget','', true);
        $this->load->view('main', $data);
    }
    
    public function events(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $data['content'] = $this->load->view('pages/investors/v_events','', true);
        $this->load->view('main', $data);
    }
}
