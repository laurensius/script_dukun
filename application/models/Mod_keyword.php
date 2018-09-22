<?php

class Mod_Keyword extends CI_Model{

    function insert_keyword($data){
        $this->db->insert('wp_oxen99_keyword',$data);
        return $this->db->affected_rows();
    }

    function get_keyword_by_id($data_where){
        $this->db->select('*');
        $this->db->from('wp_oxen99_keyword');
        $this->db->where($data_where);
        $query = $this->db->get();
        return $query->result();
    }

}