<?php
class Kolegij_model extends CI_Model{
    
    public function get_kolegiji($korisnik_id){
       $this->db->where('idStudenta',$korisnik_id);
       $query = $this->db->get('Kolegij');
        return $query->result();
    }
    
    public function get_kolegij($kolegij_id){
        $query = $this->db->get('Kolegij');
        $this->db->where('idKolegija',$kolegij_id);
        return $query->row();
    }
    
    public function kreiraj_kolegij($data){
	$insert = $this->db->insert('Kolegij', $data);
	return $insert;
    }
    
    
    
     public function izmijeni_kolegij($kolegij_id,$data){
        $this->db->where('idKolegija', $kolegij_id);
        $this->db->update('Kolegij', $data); 
        return TRUE;
    }
    
    public function get_kolegij_data($kolegij_id){
        $this->db->where('idKolegija',$kolegij_id);
        $query = $this->db->get('Kolegij');
        return $query->row();
    }
    
     public function obrisi_kolegij($kolegij_id){
        $this->db->where('idKolegija',$kolegij_id);
        $this->db->delete('Kolegij');
        $this->obrisi_obaveze_iz_kolegija($kolegij_id);
        return;
    }
    
}
