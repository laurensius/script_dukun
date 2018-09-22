<?php

class Mod_Badword extends CI_Model{

    function insert($data){
        $this->db->insert("wp_oxen99_badword",$data);
    }

    function get_badword(){
        $this->db->select('badword');
        $this->db->from('wp_oxen99_badword');
        $query = $this->db->get();
        return $query->result();
    }

    

}