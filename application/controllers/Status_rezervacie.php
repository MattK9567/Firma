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

    public function create()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('dstatus', 'Status (boolean)', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('status_rezervacie/create');
            $this->load->view('template/footer');
        }
        else {
            $data = array(
                'status' => $this->input->post('dstatus'),
            );

            $this->Status_rezervacie_model->insert_status_rezervacie($data);
            $data['message'] = 'Dáta úspešne vložené';

            $this->load->view('template/header', $data);
            $this->load->view('status_rezervacie/create', $data);
            $this->load->view('template/footer');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        $this->Status_rezervacie_model->delete_status_rezervacie($id);
        redirect(base_url() . 'index.php/status_rezervacie');
    }
}