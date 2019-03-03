<?php


class Home  extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('media');
    }
    
    /*
     * View : v_home
     * model : media
     * Translation : home_lang
     */
    public function index(){        
        // ---------------------------------------------------------------------
        // data 
        $news_id = $this->media->lastNewsTitle()->news_id; // news_id
        // get news header 
        $v_data['last_news_head'] = $this->media->lastNewsTitle();
        $v_data['newsCoverContent'] = $this->media->newsCoverContent($news_id);
        //----------------------------------------------------------------------
        // scripts css, js
        $data['custom_css'] = 'homepage.css';        
        $data['custom_js'] = 'main.js';
        $data['custom_js'] = 'home.js';
        
        // load the view as string 
        $data['content'] = $this->load->view('pages/v_home', $v_data, true);
        $this->load->view('main', $data);
    }
    
    
    public function testmodel(){
        
        $data['topNews'] = $this->media->topNews();        
        echo '<pre>';
        echo print_r($data);
        echo '</pre>';
    }
    
    
}
