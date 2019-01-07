<?php

defined('BASEPATH') OR exit('accès non autorisé');

class Boutique extends CI_Controller {

    public function list(){
        $this->load->model('boutique_model');
        $data['list'] = $this->boutique_model->get_list();
        $this->load->view('header');
        $this->load->view('list', $data);
        $this->load->view('footer');
    }
    // public function add(){

    // }
    // public function show(){

    // }

}