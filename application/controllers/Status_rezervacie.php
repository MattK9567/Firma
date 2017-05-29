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

    public function edit()
    {
        $id = $this->uri->segment(3);

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['zakaznici'] = $this->Status_rezervacie_model->get_status_rezervacie($id);

        $this->form_validation->set_rules('status', 'Status', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('status_rezervacie/edit', $data);
            $this->load->view('template/footer');
        }
        else {
            $this->Status_rezervacie_model->set_status_rezervacie($id);
            redirect(base_url().'index.php/status_rezervacie');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        $this->Status_rezervacie_model->delete_status_rezervacie($id);
        redirect(base_url() . 'index.php/status_rezervacie');
    }
}