<?php

class Mod_Cron extends CI_Model{

    function insert_cron($data){
        $this->db->insert('wp_oxen99_cron',$data);
        return $this->db->affected_rows();
    }

    function get_recent_keyword(){
        $this->db->select('*');
        $this->db->from('wp_oxen99_cron');
        $this->db->order_by('id','desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }


}