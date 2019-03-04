<?php

class Media extends CI_Model {

    private $lang;
    function __construct() {
        parent::__construct();
        // $this->lang = $this->session->site_lang;
        $this->lang = 'ar';
    }
    
    /*
     * this function return the leatest news 
     * return 1 recored 
     */
    public function lastNewsTitle(){
        $table = 'news';
        $title = $this->lang == 'ar'? 'title_ar as title': 'title_en as title';
        $columns = "news_id,news_date,image , $title";
        $where = ' is_visible = 1 ';
        $this->db->order_by('news_id', 'DESC');
        $query = $this->model_db->getSingleRow($table, $columns, $where);        
        return $query;
    }
    
    /*
     * This function return the first paragraph of content 
     * return 1 record 
     */
    public function newsCoverContent($news_id){
        $table = 'news_contents';
        // get the content based on language 
        $content = $this->lang == 'ar'? 'content_text_ar as content': 'content_text_en as content';
        // selected columns 
        $columns = "news_id, content_id, content_image, $content";
        // where condition includes news_id as a parameter
        $where = " content_id = 1 and news_id = $news_id";
        
        $query = $this->model_db->getSingleRow($table, $columns, $where);        
        return $query;        
    }
    
    
    /*
     * This function return leatest top 9 news     *
     */    
    public function topNews(){
        $table = 'news';
        $title = $this->lang == 'ar'? 'title_ar as title': 'title_en as title';
        $columns = "news_id,news_date,image , $title";
        $where = ' is_visible = 1 ';        
        $this->db->limit(9, 1);
        $query = $this->model_db->read($table, $columns, $where, 'news_id DESC');
        return $query;
    }
} // end of file

