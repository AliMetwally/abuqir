<?php

class M_about_projects extends CI_Model {
    function __construct() {
        parent::__construct();
        model_site_lang();
        $this->lang = $this->session->site_lang;
        
    }

    public function get_projects(){
        $table = 'projects a,projects_contents b';
        $project_name = $this->lang == 'ar'? 'a.project_name_ar as project_name': 'a.project_name_en as project_name';
        $content = $this->lang == 'ar'? 'SUBSTRING_INDEX(TRIM(b.content_ar), \' \', 9) as content': 'SUBSTRING_INDEX(TRIM(b.content_en), \' \', 9) as content';
        $columns = "a.project_id,$project_name, b.head_id,b.content_id,$content";
        $where = ' b.head_id = 1 and b.content_id = 1 and a.project_id = b.project_id';
        $this->db->order_by('a.project_id');
        $query = $this->model_db->read($table, $columns, $where);        
        return $query;
    
    }

    public function get_projects_name($project){
        $table = 'projects a';
        $project_name = $this->lang == 'ar'? 'a.project_name_ar as project_name': 'a.project_name_en as project_name';
        $columns = "a.project_id, $project_name,a.images";
        $where = ' a.project_id = '.$project;
        // $this->db->order_by('a.project_id');
        $query = $this->model_db->getSingleRow($table, $columns, $where);        
        return $query;
    }

    public function get_projects_header($project){
        $table = 'projects_headers b';
        $head_name = $this->lang == 'ar'? 'b.head_name_ar as head_name': 'b.head_name_en as head_name';
        $columns = "b.project_id,b.head_id,$head_name";
        $where = ' b.project_id = '.$project;
        $query = $this->model_db->read($table, $columns, $where);        
        return $query;
    }

    public function get_projects_content($project,$header){
        $table = 'projects_contents c';
        $content = $this->lang == 'ar'? 'c.content_ar as content': 'c.content_en as content';
        $columns = "c.content_id,$content";
        $where = " c.head_id = ".$header." and c.project_id = ".$project;
        // $this->db->order_by('a.project_id');
        $query = $this->model_db->read($table, $columns, $where);        
        return $query;
        
    }

}