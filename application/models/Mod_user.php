<?php

class Mod_User extends CI_Model{

    function get_user(){
        $this->db->select('*');
        $this->db->from('wp_users');
        $query = $this->db->get();
        return $query->result();
    }

}