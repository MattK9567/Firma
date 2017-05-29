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


    public function delete()
    {
        $id = $this->uri->segment(3);

        $this->Rezervacia_model->delete_rezervacie($id);
        redirect(base_url() . 'index.php/rezervacia');
    }
}