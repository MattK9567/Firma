<?php

class Status_rezervacie extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Status_rezervacie_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['status_rezervacie'] = $this->Status_rezervacie_model->get_status_rezervacie();
        $data['title'] = 'Status rezervácie';

        $this->load->view('template/header', $data);
        $this->load->view('status_rezervacie/index', $data);
        $this->load->view('template/footer');
    }
}