<?php

class Mod_Post extends CI_Model{

    function insert_post($the_article){
        $this->db->insert('wp_posts',$the_article);
        return $this->db->affected_rows();
    }

    function insert_thumbnail($the_thumbnail){
        $this->db->insert_batch('wp_postmeta',$the_thumbnail);
        return $this->db->affected_rows();
    }

    function get_the_last(){
        $this->db->select('*');
        $this->db->from('wp_posts');
        $this->db->where("post_status = 'publish'");
        $this->db->order_by("id","DESC");
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

}