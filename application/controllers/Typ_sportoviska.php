<?php

class Typ_sportoviska extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Typ_sportoviska_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['typ_sportoviska'] = $this->Typ_sportoviska_model->get_typ_sportoviska();
        $data['title'] = 'Typy športovísk';

        $this->load->view('template/header', $data);
        $this->load->view('typ_sportoviska/index', $data);
        $this->load->view('template/footer');
    }

    public function edit()
    {
        $id = $this->uri->segment(3);

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['typ_sportoviska'] = $this->Typ_sportoviska_model->get_typ_sportoviska($id);
        $data['title'] = 'Editácia typu športoviska';
        $data['subtitle'] = $data['typ_sportoviska']['nazov'];

        $this->form_validation->set_rules('nazov', 'Nazov', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('typ_sportoviska/edit', $data);
            $this->load->view('template/footer');
        }
        else {
            $this->Typ_sportoviska_model->set_typ_sportoviska($id);
            redirect(base_url().'index.php/typ_sportoviska');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        $this->Typ_sportoviska_model->delete_typ_sportoviska($id);
        redirect(base_url() . 'index.php/typ_sportoviska');
    }
}