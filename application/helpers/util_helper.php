<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('model_site_lang')){
    
    function model_site_lang(){
        $ci =& get_instance();
        
        $site_lang = $ci->session->userdata('site_lang');
        if (! $site_lang)  {$ci->session->set_userdata('site_lang','ar');}// set language to arabic
    }
    
}