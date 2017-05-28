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

    public function create()
    {

    }

    public function edit()
    {

    }

    public function view($id = NULL)
    {
        $data['zakaznici'] = $this->Customers_model->get_customers($id);

        if(empty($data['zakaznici']))
        {
            show_404();
        }

        $data['title'] = $data['zakaznici']['meno'];
        $data['subtitle'] = $data['zakaznici']['meno'] . $data['zakaznici']['priezvisko'];

        $this->load->view('template/header', $data);
        $this->load->view('customers/view', $data);
        $this->load->view('template/footer');
    }

    public function delete()
    {

    }
}