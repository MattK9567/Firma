<?php

class Customers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customers_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['zakaznici'] = $this->Customers_model->get_customers();
        $data['title'] = 'Zákazníci';

        $this->load->view('template/header', $data);
        $this->load->view('customers/index', $data);
        $this->load->view('template/footer');
    }
}