<?php


class Home  extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('media');
        $this->load->model('products');
    }
    
    /*
     * View : v_home
     * model : media - product
     * Translation : home_lang
     */
    public function index(){        
        // ---------------------------------------------------------------------
        // get news data 
        $news_id = $this->media->lastNewsTitle()->news_id; // news_id
        // get news header 
        $v_data['last_news_head'] = $this->media->lastNewsTitle();
        $v_data['newsCoverContent'] = $this->media->newsCoverContent($news_id);
        $v_data['topNews'] = $this->media->topNews(); 

        // ---------------------------------------------------------------------
        // get product data
        $index = 0;
        $products = $this->products->getProducts();
        foreach($products as $prod){
        $all[$index] = array(
            "product" => $prod,
            "spec" => $this->products->getProductSpecs($prod->category_id,$prod->product_id)
        );
        $index++;
        }
        $v_data['products_specs'] = $all;
        //----------------------------------------------------------------------
        // scripts css, js
        $data['custom_css'] = 'homepage.css';        
        $data['custom_js'] = 'main.js';
        $data['custom_js'] = 'home.js';
        
        // load the view as string 
        $data['content'] = $this->load->view('pages/v_home', $v_data, true);
        $this->load->view('main', $data);
    }    
}
