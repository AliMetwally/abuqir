<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_contact
 *
 * @author dev7
 */
class M_contact extends CI_Model {
    
    function getMessageType()
    {
        $query = $this->db->query('SELECT message_type, type_name_en FROM message_type');
        
        $return = array();        
        // check if the query fetch data
        if ($query->result_array() > 0) {
            foreach ($query->result_array() as $row)
            {
                $return[$row['message_type']] = $row['type_name_en'];
            }
        }
        return $return;
    }
    
    // list of contact sector
    function getContactSectors()
    {
        $query = $this->db->query('SELECT sector_id, sector_name_en FROM contact_sectors where sector_id != 10');
        
        $return = array();        
        // check if the query fetch data
        if ($query->result_array() > 0) {
            foreach ($query->result_array() as $row)
            {
                $return[$row['sector_id']] = $row['sector_name_en'];
            }
        }
        return $return;
    }
    
    function saveContact($data){
        $this->db->insert('messages',$data);
    }
    
}
