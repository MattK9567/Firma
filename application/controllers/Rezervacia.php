<?php

class Rezervacia extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rezervacia_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['rezervacie'] = $this->Rezervacia_model->get_rezervacie();
        $data['title'] = 'Rezervácie';

        $this->load->view('template/header', $data);
        $this->load->view('rezervacia/index', $data);
        $this->load->view('template/footer');
    }

    public function edit()
    {
        $id = $this->uri->segment(3);

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['rezervacie'] = $this->Rezervacia_model->get_rezervacie($id);

        $this->form_validation->set_rules('sportoviska_ID', 'Sportovisko', 'required'); //spravit cez select
        $this->form_validation->set_rules('status_rezervacie_ID', 'Status rezervacie', 'required'); //spravit cez select
        $this->form_validation->set_rules('zakaznici_ID', 'Zakaznik', 'required'); //spravit cez select
        $this->form_validation->set_rules('datum', 'Datum', 'required');
        $this->form_validation->set_rules('cena', 'Cena', 'required');
        $this->form_validation->set_rules('cas', 'Cas', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('rezervacia/edit', $data);
            $this->load->view('template/footer');
        }
        else {
            $this->Rezervacia_model->set_rezervacie($id);
            redirect(base_url().'index.php/rezervacia');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        $this->Rezervacia_model->delete_rezervacie($id);
        redirect(base_url() . 'index.php/rezervacia');
    }
}