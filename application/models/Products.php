<?php


class Products extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        model_site_lang();
        $this->lang = $this->session->site_lang;
    }
    
    /*
     * This Function Return All Products *
     */    
    function getProducts(){
        $table = 'products a,product_images c';
        $product_name = $this->lang == 'ar'? 'product_name_ar as product_name': 'a.product_name_en as product_name';
        $columns = "a.product_id,$product_name,a.category_id ,c.image"; 
        $where = 'a.product_id  = c.product_id and   a.category_id = c.product_category';     
        $query = $this->model_db->read($table, $columns, $where, 'a.product_order');
        return $query;
    }

    /*
     * This Function Return one Product *
     */    
    function getProduct($cat_id,$product_id){
        $table = 'products a,product_images c';
        $product_name = $this->lang == 'ar'? 'product_name_ar as product_name': 'a.product_name_en as product_name';
        $columns = "a.product_id,$product_name,a.category_id ,c.image"; 
        $where = " a.product_id  = c.product_id and   a.category_id = c.product_category and a.product_id = $product_id and a.category_id = $cat_id";     
        $query = $this->model_db->getSingleRow($table, $columns, $where, 'a.product_order');
        return $query;
    }

    /*
     * This function return Product Specs *
     */    
    public function getProductSpecs($cat_id,$product_id){
        $table = 'product_specs';
        $spec_name = $this->lang == 'ar'? 'spec_text_ar as spec_name': 'spec_text_en as spec_name';
        $columns = "product_id,category_id,spec_id ,$spec_name";
        $where = " product_id = $product_id and category_id = $cat_id";       
        $query = $this->model_db->read($table, $columns, $where, 'spec_id');
        return $query;
    }
    
}
