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

    public function show_customer_id()
    {
        $id = $this->uri->segment(3);
        $data['zakaznici'] = $this->Customers_model->get_customers();
        $data['jeden_zakaznik'] = $this->Customers_model->show_customers_id($id);

        $this->load->view('template/header', $data);
        $this->load->view('customers/edit', $data);
        $this->load->view('template/footer');
    }

    public function update_customer_id1()
    {
        $id= $this->input->post('did');
        $data = array(
            'meno' => $this->input->post('dmeno'),
            'priezvisko' => $this->input->post('dpriezvisko'),
            'email' => $this->input->post('demail'),
            'nazov_firmy' => $this->input->post('dnazov_firmy')
        );
        $this->Customers_model->update_customers_id1($id, $data);
        $this->show_customer_id();

        redirect(base_url().'index.php/Customers');
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
