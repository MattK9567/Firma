<?php

class Sportoviska extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sportoviska_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['sportoviska'] = $this->Sportoviska_model->get_sportoviska();
        $data['title'] = 'Športoviská';

        $this->load->view('template/header', $data);
        $this->load->view('sportoviska/index', $data);
        $this->load->view('template/footer');
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        $this->Sportoviska_model->delete_sportoviska($id);
        redirect(base_url() . 'index.php/sportoviska');
    }
}