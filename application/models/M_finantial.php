<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_finantial extends CI_Model
{
    public function get_shareholders()
    {
        $query = $this->db->query('select shareholder_no, name, en_name, ratio from afc_shareholders order by shareholder_no');
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    } // end of get_shareholders 
    
     public function get_directors()
     {
         $query = $this->db->query('SELECT name , en_name , position, en_position FROM afc_directors order by director_no');
         if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
     } // end of get_directors
     
     
     public function get_members()
     {
         $query = $this->db->query('select * from afc_committe');
         if ($query->num_rows() > 0)
        {            
            return $query->result();
        }
        else
        {
            return FALSE;
        }
     } // end of get_members
     
     public function get_public_associations()
     {
         $query = $this->db->query('SELECT assoc_place, assoc_place_en, assoc_date FROM afc_associations order by assoc_date desc');
          if ($query->num_rows() > 0)
        {            
            return $query->result();
        }
        else
        {
            return FALSE;
        }
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
         $query = $this->db->query('SELECT free_info, free_info_en, free_date FROM afc_free_coupons order by free_date desc');
           if ($query->num_rows() > 0)
        {            
            return $query->result();
        }
        else
        {
            return FALSE;
        }
     }// get_free_coupons
     
     
    public function get_statments()
    {
        $query = $this->db->query('SELECT title,en_title, file_date, file_path, en_file_path FROM afc_stock_files where category_id = 1 order by file_date');
        if ($query->num_rows() > 0)
        {            
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    } // end of get_statments
    
    
    public function get_finantial()
    {
        $query = $this->db->query('SELECT title,en_title, file_date, file_path, en_file_path FROM afc_stock_files where category_id = 2 order by file_date');
        if ($query->num_rows() > 0)
        {            
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    } // end of get_finantial
    
    
    public function get_associations()
    {
        $query = $this->db->query('SELECT title,en_title, file_date, file_path, en_file_path FROM afc_stock_files where category_id = 3 order by file_date');
        if ($query->num_rows() > 0)
        {            
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    } // end of get_associations
    
    
    public function get_budgets()
    {
        $query = $this->db->query('SELECT title,en_title, file_date, file_path, en_file_path FROM afc_stock_files where category_id = 4 order by file_date');
        if ($query->num_rows() > 0)
        {            
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    } // end of get_butgets
	
	public function get_events()
    {
        $query = $this->db->query('SELECT title,en_title, file_date, file_path, en_file_path FROM afc_stock_files where category_id = 5 order by file_date');
        if ($query->num_rows() > 0)
        {            
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    } // end of get_events
    
} // eof
