<?php
class Obaveze extends CI_Controller { 
     public function prikaz($obaveza_id){
        $data['obaveza'] = $this->Obaveza_model->get_obaveza($obaveza_id);
        $data['status'] = $this->Obaveza_model->provjeri_status($obaveza_id);
        $data['main_content'] = 'obaveze/prikaz';
        $this->load->view('layouts/main',$data);
    }
    
     public function unos($kolegij_id = null){
        $this->form_validation->set_rules('naziv_obaveze','Naziv obaveze','trim|required');
        $this->form_validation->set_rules('opis','Opis','trim');       
        if($this->form_validation->run() == FALSE){
            $data['naziv'] = $this->Obaveza_model->get_naziv_kolegija($kolegij_id); 
            $data['main_content'] = 'obaveze/dodaj_obavezu';
            $this->load->view('layouts/main',$data);  
        } else {
            $data = array(             
                'naziv_obaveze'    => $this->input->post('naziv_obaveze'),
                'opis'    => $this->input->post('opis'),
                'datum'     => $this->input->post('datum'),
                'idKolegija'      => $kolegij_id
            );
           
           if($this->Obaveza_model->kreiraj_obavezu($data)){
                $this->session->set_flashdata('kolegij_kreiran', 'Tvoja obaveza je kreirana');
                redirect('kolegiji/prikaz/'.$kolegij_id.'');
           }
        }
    }
    
}
