<?php

class LanguageLoader {

    function initialize() {
        $ci = & get_instance();
        
        $site_lang = $ci->session->userdata('site_lang');
        
        $controller = $ci->router->fetch_class();
        $method = $ci->router->fetch_method();
        
        if (! $site_lang)  {$ci->session->set_userdata('site_lang','ar');}// set language to arabic
        
        // load naviagation translation for template 
        $ci->lang->load('navigation', $ci->session->userdata('site_lang'));
        
        
        if($controller == 'home' && $method == 'index' ){
            $ci->lang->load('home', $ci->session->userdata('site_lang'));
        } else  if($controller == 'home' && $method == 'contact' ){
            $ci->lang->load('contact', $ci->session->userdata('site_lang'));
        } else  if($controller == 'home' && $method == 'socialresponsibiltiy' ){
            $ci->lang->load('social_responsibiltiy', $ci->session->userdata('site_lang'));
        }else  if($controller == 'investors' ){
            $ci->lang->load('investors', $ci->session->userdata('site_lang'));
        }else  if($controller == 'about' ){
            $ci->lang->load('about', $ci->session->userdata('site_lang'));
        }else  if($controller == 'home' && $method == 'exports' ){
            $ci->lang->load('exports', $ci->session->userdata('site_lang'));
        }
         
    }

}
