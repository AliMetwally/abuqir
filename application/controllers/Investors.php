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
        
        $v_data['shareholdes'] = $this->m_finantial->get_shareholders();
        $data['content'] = $this->load->view('pages/investors/v_shareholders',$v_data, true);
        $this->load->view('main', $data);
    }
    
    public function board(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $v_data['directors'] = $this->m_finantial->get_directors();
        $data['content'] = $this->load->view('pages/investors/v_board',$v_data, true);
        $this->load->view('main', $data);
    }
    
    public function audit(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $v_data['members'] = $this->m_finantial->get_members();
        
        $data['content'] = $this->load->view('pages/investors/v_audit',$v_data, true);
        $this->load->view('main', $data);
    }
    
    public function finantial(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $v_data['files'] = $this->m_finantial->get_statments();
        
        $data['content'] = $this->load->view('pages/investors/v_finantial',$v_data, true);
        $this->load->view('main', $data);
    }
    
    public function summary(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $v_data['files'] = $this->m_finantial->get_finantial();
        
        $data['content'] = $this->load->view('pages/investors/v_summary',$v_data, true);
        $this->load->view('main', $data);
    }
    
    public function association(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $v_data['files'] = $this->m_finantial->get_associations();
        
        $data['content'] = $this->load->view('pages/investors/v_association',$v_data, true);
        $this->load->view('main', $data);
    }
    
    public function distibutions(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $v_data['public_associations'] = $this->m_finantial->get_public_associations();
        $v_data['coupons'] = $this->m_finantial->get_coupons();
        $v_data['free_coupons'] = $this->m_finantial->get_free_coupons();
        
        $data['content'] = $this->load->view('pages/investors/v_distibutions',$v_data, true);
        $this->load->view('main', $data);
    }
    
    public function budget(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $v_data['files'] = $this->m_finantial->get_budgets();
        
        $data['content'] = $this->load->view('pages/investors/v_budget',$v_data, true);
        $this->load->view('main', $data);
    }
    
    public function events(){
        $data['custom_css'] = 'investors.css'; 
        $data['custom_js'] = 'main.js';
        
        $v_data['files'] = $this->m_finantial->get_events();
        
        $data['content'] = $this->load->view('pages/investors/v_events',$v_data, true);
        $this->load->view('main', $data);
    }
}
