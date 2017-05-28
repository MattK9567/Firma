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
}