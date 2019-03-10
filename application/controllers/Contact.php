<?php


class Contact extends CI_Controller{

    public function __construct() {
        parent::__construct();
    }

    /*
     * View : v_contact
     * model :
     * Translation : contact_lang
     */
    public function index(){
        //----------------------------------------------------------------------
        // scripts css, js
        $data['custom_css'] = 'contactpage.css';        
        $data['custom_js'] = 'main.js';
        $data['custom_js'] = 'contact.js';
        
        // load the view as string 
        $data['content'] = $this->load->view('pages/v_contact',true, true);
        $this->load->view('main', $data);
      
    }

}