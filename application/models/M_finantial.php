<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_finantial extends CI_Model
{
    public function __construct() {
        parent::__construct();
        model_site_lang();
        $this->lang = $this->session->site_lang;        
    }
    
    public function get_shareholders()
    {
        $table = 'afc_shareholders';
        $name = $this->lang == 'ar'? 'name as name': 'en_name as name';
        $columns = "shareholder_no, ratio, $name";        
        $this->db->order_by('shareholder_no', 'asc');
        $query = $this->model_db->read($table ,$columns);        
        return $query;
    } // end of get_shareholders 
    
     public function get_directors()
     {
         $table = 'afc_directors';
         $name = $this->lang == 'ar'? 'name as name': 'en_name as name';
         $position = $this->lang == 'ar'? 'position as position': 'en_position as position';
         $columns = "$name, $position";
         
         $this->db->order_by('director_no', 'asc');
         $query = $this->model_db->read($table ,$columns);
//         $query = $this->db->query('SELECT name , en_name , position, en_position FROM afc_directors order by director_no');
         return $query;
     } // end of get_directors
     
     
     public function get_members()
     {
         $table = 'afc_committe';
         $name = $this->lang == 'ar'? 'name as name': 'en_name as name';
         $distination = $this->lang == 'ar'? 'distination as distination': 'en_distination as distination';
         $position = $this->lang == 'ar'? 'position as position': 'en_position as position';
         $columns = "$name, $distination, $position";         
         $this->db->order_by('member_no', 'asc');
         
         $query = $this->model_db->read($table ,$columns);
         return $query;
     } // end of get_members
     
     public function get_public_associations()
     {         
         $table = "afc_associations";
         $assoc_place = $this->lang == 'ar'? 'assoc_place as assoc_place': 'assoc_place_en as assoc_place';
         $columns = "$assoc_place, assoc_date";
         $this->db->order_by('assoc_date', 'desc');
         $query = $this->model_db->read($table ,$columns);
         return $query;
     } // end of get_associations
     
     public function get_coupons()
     {
         $query = $this->db->query('SELECT coupon_no, coupon_value, coupon_date FROM afc_coupons order by coupon_no desc');
          if ($query->num_rows() > 0)
        {            
            return $query->result();
        }
        else
        {
            return FALSE;
        }
     } // get_coupons
     
     public function get_free_coupons()
     {
         $table = "afc_free_coupons";
         $free_info = $this->lang == 'ar'? 'free_info as free_info': 'free_info_en as free_info';
         $columns = "$free_info, free_date";
         $this->db->order_by('free_date', 'desc');
         $query = $this->model_db->read($table ,$columns);
         return $query;
     }// get_free_coupons
     
     
    public function get_statments()
    {
        $table = 'afc_stock_files';
        $title = $this->lang == 'ar'? 'title as title': 'en_title as title';
        $file_path = $this->lang == 'ar'? 'file_path as file_path': 'en_file_path as file_path';
        $columns = "$title, $file_path, file_date";
        $where = 'category_id = 1';
        $query = $this->model_db->read($table ,$columns, $where);
        return $query;
    } // end of get_statments
    
    
    public function get_finantial()
    {
        $table = 'afc_stock_files';
        $title = $this->lang == 'ar'? 'title as title': 'en_title as title';
        $file_path = $this->lang == 'ar'? 'file_path as file_path': 'en_file_path as file_path';
        $columns = "$title, $file_path, file_date";
        $where = 'category_id = 2';
        $query = $this->model_db->read($table ,$columns, $where);
        return $query;
    } // end of get_finantial
    
    
    public function get_associations()
    {
        $table = 'afc_stock_files';
        $title = $this->lang == 'ar'? 'title as title': 'en_title as title';
        $file_path = $this->lang == 'ar'? 'file_path as file_path': 'en_file_path as file_path';
        $columns = "$title, $file_path, file_date";
        $where = 'category_id = 3';
        $query = $this->model_db->read($table ,$columns, $where);
        return $query;
    } // end of get_associations
    
    
    public function get_budgets()
    {
        $table = 'afc_stock_files';
        $title = $this->lang == 'ar'? 'title as title': 'en_title as title';
        $file_path = $this->lang == 'ar'? 'file_path as file_path': 'en_file_path as file_path';
        $columns = "$title, $file_path, file_date";
        $where = 'category_id = 4';
        $query = $this->model_db->read($table ,$columns, $where);
        return $query;
    } // end of get_butgets
	
	public function get_events()
    {
        $table = 'afc_stock_files';
        $title = $this->lang == 'ar'? 'title as title': 'en_title as title';
        $file_path = $this->lang == 'ar'? 'file_path as file_path': 'en_file_path as file_path';
        $columns = "$title, $file_path, file_date";
        $where = 'category_id = 5';
        $query = $this->model_db->read($table ,$columns, $where);
        return $query;
    } // end of get_events
    
} // eof
