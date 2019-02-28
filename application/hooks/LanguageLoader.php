<?php

class LanguageLoader {

    function initialize() {
        $ci = & get_instance();
        
        $site_lang = $ci->session->userdata('site_lang');

        if ($site_lang) {
            $ci->lang->load('navigation', $ci->session->userdata('site_lang'));
        } else {
            $ci->lang->load('navigation', 'ar'); // default language = arabic
        }
    }

}
