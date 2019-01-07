<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Boutique_model extends CI_Model {

    
    public function get_list(){
        $this->load->database();
        $data['list'] = $this->db->query('SELECT * FROM produits')->result();
        return $data['list'];
    }
    public function update_list($id){
        $this->load->database();
        $data = $this->db->query('SELECT * FROM produits WHERE pro_id=?', $id);
        $array['product'] = $data->row();
        return $array['product'];
    }
}