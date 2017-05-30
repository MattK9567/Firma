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
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('dmeno', 'Meno', 'required');
        $this->form_validation->set_rules('dpriezvisko', 'Priezvisko', 'required');
        $this->form_validation->set_rules('demail', 'Email', 'required');
        $this->form_validation->set_rules('dnazov_firmy', 'Názov firmy');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('customers/create');
            $this->load->view('template/footer');
        }
        else {
            $data = array(
                'meno' => $this->input->post('dmeno'),
                'priezvisko' => $this->input->post('dpriezvisko'),
                'email' => $this->input->post('demail'),
                'nazov_firmy' => $this->input->post('dnazov_firmy')
            );

            $this->Customers_model->insert_customers($data);
            $data['message'] = 'Dáta úspešne vložené';

            $this->load->view('template/header', $data);
            $this->load->view('customers/create', $data);
            $this->load->view('template/footer');
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['zakaznici'] = $this->Customers_model->get_customers($id);

        $data['title'] = 'Editovanie profilu používateľa ';
        $data['subtitle'] = $data['zakaznici']['meno'] . $data['zakaznici']['priezvisko'];

        $this->form_validation->set_rules('meno', 'Meno', 'required');
        $this->form_validation->set_rules('priezvisko', 'Priezvisko', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('nazov_firmy', 'Názov firmy');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('customers/edit', $data);
            $this->load->view('template/footer');
        }
        else {
            $this->Customers_model->set_customers($id);
            redirect(base_url().'index.php/customers');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        if (empty($id)) {
            show_404();
        }

        $this->Customers_model->delete_customers($id);
        redirect(base_url() . 'index.php/customers');
    }
}
