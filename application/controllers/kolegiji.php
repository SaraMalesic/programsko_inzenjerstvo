<?php
class Kolegiji extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            //Set error
            $this->session->set_flashdata('need_login', 'Morate se prijaviti');
            redirect('pocetna/index');
        }
    }
    
    public function index(){
        
        $korisnik_id = $this->session->userdata('korisnik_id');
        //Get all lists from the model
        $data['kolegiji'] = $this->Kolegij_model->get_kolegiji($korisnik_id);
        $data['main_content'] = 'kolegiji/index';
        $this->load->view('layouts/main',$data);
    }
    
     public function prikaz($kolegij_id){
        //Get all lists from the model
       $data['kolegij'] = $this->Kolegij_model->get_kolegij($kolegij_id);  
       $data['main_content'] = 'kolegiji/prikaz';
       $this->load->view('layouts/main',$data);
    }
    
    
    public function unos(){
        $this->form_validation->set_rules('naziv','Naziv','trim|required');
        $this->form_validation->set_rules('godina','Godina','trim');
        $this->form_validation->set_rules('profesor','Profesor','trim');
        

        
        if($this->form_validation->run() == FALSE){
            //Load view and layout
            $data['main_content'] = 'kolegiji/dodaj_kolegij';
            $this->load->view('layouts/main',$data);  
        } else {

            $data = array(             
                'naziv'    => $this->input->post('naziv'),
                'godina'    => $this->input->post('godina'),
                'profesor'    => $this->input->post('profesor'),
                'idStudenta' => $this->session->userdata('korisnik_id')
               
            );
           if($this->Kolegij_model->kreiraj_kolegij($data)){
                $this->session->set_flashdata('kolegij_kreiran', 'Dodali ste novi kolegij');
                //Redirect to index page with error above
                redirect('kolegiji/index');
           }
        }
    }
    
    public function izmjena($kolegij_id){
        $this->form_validation->set_rules('naziv','Naziv','trim|required');
        $this->form_validation->set_rules('godina','Godina','trim');
        $this->form_validation->set_rules('profesor','Profesor','trim');
        
        if($this->form_validation->run() == FALSE){
            //Get the current list info
            $data['ovaj_kolegij'] = $this->Kolegij_model->get_kolegij_data($kolegij_id);
            //Load view and layout
            $data['main_content'] = 'kolegiji/izmijeni_kolegij';
            $this->load->view('layouts/main',$data);  
        } else {

            $data = array(             
                'naziv'    => $this->input->post('naziv'),
                'godina'    => $this->input->post('godina'),
                'profesor'    => $this->input->post('profesor'),
                'idStudenta' => $this->session->userdata('korisnik_id')
            );
           if($this->Kolegij_model->izmijeni_kolegij($kolegij_id,$data)){      
                $this->session->set_flashdata('kolegij_izmijenjen', 'Tvoj kolegij je uspješno izmijenjen');
                redirect('kolegiji/index');
           }
        }
    }
 

}
