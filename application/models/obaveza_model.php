<?php
class Obaveza_model extends CI_Model{
     
    public function get_obaveza($obaveza_id){
        $query = $this->db->get('Obaveza');
        $this->db->where('idObaveze',$obaveza_id);
        return $query->row();
    }

    public function get_naziv_kolegija($kolegij_id){
        $this->db->where('idKolegija',$kolegij_id);
        $query = $this->db->get('Kolegij');
        return $query->row()->naziv;
    }
    
    
    public function kreiraj_obavezu($data){
	$insert = $this->db->insert('Obaveza', $data);
	return $insert;
    }
   
    public function provjeri_status($obaveza_id){
        $this->db->where('idObaveze',$obaveza_id);
        $query = $this->db->get('Obaveza');
        return $query->row()->status;
    }
    
}
