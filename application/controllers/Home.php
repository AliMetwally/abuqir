<?php


class Home  extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        $data['content'] = $this->load->view('testmaster', '', true);
        $data['custom_css'] = 'homepage.css';
        $this->load->view('main', $data);
    } 
    
}
