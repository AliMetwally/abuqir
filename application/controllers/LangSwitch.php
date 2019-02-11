<?php

// this class is used in the view links of language

class LangSwitch extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('user_agent'); //            
    }
    
    function switchLanguage($language = "") {
        $language = ($language != "") ? $language : "ar";
        $this->session->set_userdata('site_lang', $language);
        
        // redirect (base_url());
        redirect($this->agent->referrer());
    }
}
