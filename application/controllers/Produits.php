<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller
{
    public function liste()
    {
        $this->load->model('produits_class');
        $data['liste'] = $this->produits_class->get_liste();
        // $this->load->database();
        // $result = $this->db->query('SELECT * FROM produits')->result();
        // $array_product['liste'] = $result;
        $this->load->view('header');
        $this->load->view('liste', $data);
        $this->load->view('footer');
    }

    public function ajout()
    {
        if($this->input->post())
        {
            // Récupère les données du formulaire
            $data = $this->input->post();
            $this->load->database();
            // Insert dans la table produits, les données du formulaire
            $this->db->insert('produits', $data);
            // Permet d'utiliser les urls
            $this->load->helper('url');
            // Redigire vers la liste (controller/vue)
            redirect( site_url("Produits/liste") );
        }
        else
        {
            $this->load->view('ajout');
        }
        
    }
    
    public function modif($id)
    {
        $this->load->database();

        if($this->input->post())
        {
            $data = $this->input->post();
            $id = $this->input->post('pro_id');
            $this->db->where('pro_id', $id);
            $this->db->update('produits', $data);
            $this->load->helper('url');
            redirect('produits/liste');
        }
        else
        {
            $liste = $this->db->query('SELECT * FROM produits WHERE pro_id=?', $id);
            if(!$liste->row()){
                echo 'ID PAS EXISTE';
            }else{
                // Lis une ligne
                $model['produits'] = $liste->row();
                $this->load->view('modif', $model);
            }

           
        }
    }
    public function delete($id){
        $this->load->database();

        if($this->input->post())
        {
            $data = $this->input->post();
            $id = $this->input->post('pro_id');
            $this->db->where('pro_id', $id);
            $this->db->delete('produits');
            $this->load->helper('url');
            redirect('produits/liste');
        }
        else
        {
            $liste = $this->db->query('SELECT * FROM produits WHERE pro_id=?', $id);
            if(!$liste->row()){
                echo 'ID PAS EXISTE';
            }else{
                // Lis une ligne
                $model['produits'] = $liste->row();
                $this->load->view('delete', $model);
            }

           
        }
    }
}