<?php


class Home  extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('media');
        $this->load->model('products');
        $this->load->helper('directory');
    }
    
    /*
     * View : v_home - v_contact - v_social_responsibiltiy - v_news
     * model : media - product
     * Translation : home_lang - contact_lang
     */
    public function index(){        
        // ---------------------------------------------------------------------
        // get news data 
        $news_id = $this->media->lastNewsTitle()->news_id; // news_id
        // get news header 
        $v_data['last_news_head'] = $this->media->lastNewsTitle();
        $v_data['newsCoverContent'] = $this->media->newsCoverContent($news_id);
        $v_data['topNews'] = $this->media->topNews(9); 
        $v_data['gallery_images'] = directory_map('./public/images/gallery/');
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


    public function contact(){
        $this->load->model('m_contact');
        //----------------------------------------------------------------------
        // scripts css, js
        $data['custom_css'] = 'contactpage.css';        
        $data['custom_js'] = 'main.js';
        $data['custom_js'] = 'contact.js';
        
        $v_data['lst_message_types'] = $this->m_contact->getMessageType();
        $v_data['lst_contact_sector'] = $this->m_contact->getContactSectors();
        
        // load the view as string 
        $data['content'] = $this->load->view('pages/v_contact',$v_data, true);
        $this->load->view('main', $data);
      
    }
    
    
public function saveContact() {
        $this->load->model('m_contact');
        // get the ajax data
        $sender_name = $this->input->get('txtName');
        $sender_company = $this->input->get('txtCompany');
        $email = $this->input->get('txtEmail');
        $message_types = $this->input->get('message_types');
        $send_to = $this->input->get('contact_sector');
        $message = $this->input->get('txtMesage');

        $message_data = array(
            'sender_name' => $sender_name,
            'sender_company' => $sender_company,
            'email' => $email,
            'message_type' => $message_types,
            'send_to' => $send_to,
            'message' => $message,
            'status' => 1
        );

        $this->m_contact->saveContact($message_data);
        
        redirect('/contact');
    }

    public function socialresponsibiltiy(){
        //----------------------------------------------------------------------
        // scripts css, js
        $data['custom_css'] = 'socialresponsibilitypage.css';        
        $data['custom_js'] = 'main.js';
        $data['custom_js'] = 'socialresponsibiltiy.js';
        
        // load the view as string 
        $data['content'] = $this->load->view('pages/v_social_responsibiltiy',true, true);
        $this->load->view('main', $data);
      
    }
    
    public function news(){
        //----------------------------------------------------------------------
        // libraries        
        $this->load->library('pagination');
        // scripts css, js
        $data['custom_css'] = 'newspage.css';        
        $data['custom_js'] = 'main.js';
        $data['custom_js'] = 'news.js';
        // get news data
        // $v_data['allNews'] = $this->media->allNews();   
        $config['base_url'] = base_url('news/');        
        $config['total_rows'] = $this->media->countNews();      
        $config['per_page'] = 8;        
        $config['uri_segment'] = 2;        
        $config['full_tag_open'] = '<ul class="pagination">';        
        $config['full_tag_close'] = '</ul>';  
        $config['attributes'] = array('class' => 'page-link');   
        $config['first_link'] = 'First';        
        $config['last_link'] = 'Last';   
        $config['first_tag_open'] = '<li>';        
        $config['first_tag_close'] = '</li>';        
        $config['prev_link'] = '&laquo';        
        $config['prev_tag_open'] = '<li class="prev">';        
        $config['prev_tag_close'] = '</li>';        
        $config['next_link'] = '&raquo';        
        $config['next_tag_open'] = '<li>';        
        $config['next_tag_close'] = '</li>';        
        $config['last_tag_open'] = '<li>';        
        $config['last_tag_close'] = '</li>';        
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';        
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';        
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $this->pagination->initialize($config);        
        $v_data['pagination'] = $this->pagination->create_links();     
        $v_data['allNews'] = $this->media->allNews($config["per_page"], $page);       
        // load the view as string 
        $data['content'] = $this->load->view('pages/v_news',$v_data, true);
        $this->load->view('main', $data);
       
    }

     public function newsDetails($n_id){
        // scripts css, js
        $data['custom_css'] = 'newspage.css';        
        $data['custom_js'] = 'main.js';
        $data['custom_js'] = 'news.js';
        //get news data
        $v_data['newsHead'] = $this->media->newsHead($n_id);
        $v_data['newsDetail'] = $this->media->newsDetails($n_id);
        $v_data['topNews'] = $this->media->topNews(3); 
        // load the view as string 
        $data['content'] = $this->load->view('pages/v_news_details',$v_data, true);
        $this->load->view('main', $data);
    }
    

    public function chairmanWord(){
        // scripts css, js
        $data['custom_css'] = 'homepage.css';        
        $data['custom_js'] = 'main.js';
        // load the view as string 
        $data['content'] = $this->load->view('pages/v_chairman','', true);
        $this->load->view('main', $data);
    }
    
    
    public function services(){
        // scripts css, js
        $data['custom_css'] = 'homepage.css';        
        $data['custom_js'] = 'main.js';
        $data['custom_js'] = 'services.js';
        // get data        
        $v_data['gallery_images'] = directory_map('./public/images/services/');
        // load the view as string 
        $data['content'] = $this->load->view('pages/v_services',$v_data, true);
        $this->load->view('main', $data);
    }
    
    // clear session data
    public function clear(){
        session_destroy();
    }
}
