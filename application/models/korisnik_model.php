<?php
class Korisnik_model extends CI_Model{
     
    public function kreiraj_korisnika(){
        $new_member_insert = array(
            'ime'       => $this->input->post('ime'),
            'prezime'        => $this->input->post('prezime'),
            'email'            => $this->input->post('email'),
            'korisnicko_ime'         => $this->input->post('username'),                    
            'lozinka'         => md5($this->input->post('password'))
        );
        
        $insert = $this->db->insert('Student', $new_member_insert);
        return $insert;
    }
    
    
    public function login_korisnik($username,$passowrd){
        $enc_password = md5($passowrd);
        
        $this->db->where('korisnicko_ime',$username);
        $this->db->where('lozinka',$enc_password);
        
        $result = $this->db->get('Student');
        if($result->num_rows() == 1){
            return $result->row(0)->idStudenta;
        } else {
            return false;
        }
    }
    
}
