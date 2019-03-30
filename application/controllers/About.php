<?php

class About extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_about_projects');
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
        $data['custom_js'] = 'about_mission.js';
        
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
        $this->load->helper('directory');
        $data['custom_css'] = 'about.css'; 
        $data['custom_js'] = 'main.js';
        
        $v_data['images'] = directory_map('./public/images/plants/'); 
        
        $data['content'] = $this->load->view('pages/about/v_plants',$v_data, true);
        $this->load->view('main', $data);
    }
    //
    
    public function projects(){
        $data['custom_css'] = 'about.css'; 
        $data['custom_js'] = 'main.js';
        // get project data
        $v_data['projects'] = $this->m_about_projects->get_projects();
        $data['content'] = $this->load->view('pages/about/v_projects',$v_data, true);
        $this->load->view('main', $data);
    }
    //

    public function Project_details() {   
        $data['custom_css'] = 'about.css'; 
        $data['custom_js'] = 'main.js';
        // get project data 
        $project_id = $this->uri->segment(3);
        $v_data['project'] = $this->m_about_projects->get_projects_name($project_id);
        $headers = $this->m_about_projects->get_projects_header($project_id);
        $index1 = 0;
        foreach ($headers as $header) {
            $all[$index1] = array(
                 "head" =>$header,
                 "content" => $this->m_about_projects->get_projects_content($header->project_id,$header->head_id)
            );
            $index1++;
        }
        $v_data['projects'] = $all;
        $data['content'] = $this->load->view('pages/about/v_project_details',$v_data, true);
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
