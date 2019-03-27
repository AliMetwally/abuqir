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
    public function topNews($limit){
        $table = 'news';
        $title = $this->lang == 'ar'? 'title_ar as title': 'title_en as title';
        $columns = "news_id,news_date,image , $title";
        $where = ' is_visible = 1 ';        
        $this->db->limit($limit, 1);
        $query = $this->model_db->read($table, $columns, $where, 'news_id DESC');
        return $query;
    }

    /*
     * This function return count of news
     */
    public function countNews(){
        $table = 'news';
        $columns = 'count(*) as news_count';
        $where = ' is_visible = 1 ';   
        $query = $this->model_db->getSingleRow($table, $columns, $where);
        return $query->news_count;
    }

    /*
     * This function return all news     *
     */    
    public function allNews($limit,$start){
        $table = 'news a, news_contents b ';
        $title = $this->lang == 'ar'? 'SUBSTRING_INDEX(TRIM(a.title_ar), \' \', 9) as title': 'SUBSTRING_INDEX(TRIM(a.title_en), \' \', 9) as title';
        $content = $this->lang == 'ar'? 'SUBSTRING_INDEX(TRIM(b.content_text_ar), \' \', 10) as content': 'SUBSTRING_INDEX(TRIM(b.content_text_en), \' \', 10)  as content';
        $columns = "a.news_id,a.news_date,a.image , $title,$content";
        $where = ' a.is_visible = 1 and b.content_id = 1 and a.news_id = b.news_id';         
        $this->db->limit($limit, $start);
        $query = $this->model_db->read($table, $columns, $where, 'news_id DESC');
        return $query;
    }
    
     /*
     * This function return news header    *
     */    
    public function newsHead($n_id){
        $table   = 'news a';
        $title   = $this->lang == 'ar'? 'a.title_ar as title': 'a.title_en as title';
        $columns = "a.news_id,a.news_date,a.image ,$title";
        $where   = ' a.is_visible = 1 and a.news_id = '.$n_id;         
        // $this->db->limit($limit, $start);
        $query = $this->model_db->getSingleRow($table, $columns, $where);
        return $query;
    }

    /*
     * This function return news details    *
     */    
    public function newsDetails($n_id){
        $table   = 'news a, news_contents b ';
        $content = $this->lang == 'ar'? 'b.content_text_ar as content': 'b.content_text_en as content';
        $columns = "a.news_id,a.news_date,a.image ,$content,b.content_image";
        $where   = ' a.is_visible = 1 and a.news_id = b.news_id and a.news_id = '.$n_id;         
        // $this->db->limit($limit, $start);
        $query = $this->model_db->read($table, $columns, $where, 'a.news_id ,b.content_id ');
        return $query;
    }
} // end of file

