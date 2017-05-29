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

    public function delete()
    {
        $id = $this->uri->segment(3);

        $this->Typ_sportoviska_model->delete_typ_sportoviska($id);
        redirect(base_url() . 'index.php/typ_sportoviska');
    }
}