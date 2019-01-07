    <?php if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Produits_class extends CI_Model
    {
        public function get_liste(){
            $this->load->database();
            $liste['list'] = $this->db->query('SELECT * FROM produits')->result();
            return $liste['list'];
        }
        
    }