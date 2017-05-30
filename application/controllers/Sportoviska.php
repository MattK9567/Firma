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

    public function create()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('dnazov', 'Názov', 'required');
        $this->form_validation->set_rules('dtyp_sportoviska_ID', 'Typ športoviska', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('sportoviska/create');
            $this->load->view('template/footer');
        }
        else {
            $data = array(
                'nazov' => $this->input->post('dnazov'),
                'typ_sportoviska_ID' => $this->input->post('dtyp_sportoviska_ID')
            );

            $this->Sportoviska_model->insert_sportovisko($data);
            $data['message'] = 'Dáta úspešne vložené';

            $this->load->view('template/header', $data);
            $this->load->view('sportoviska/create', $data);
            $this->load->view('template/footer');
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['sportoviska'] = $this->Sportoviska_model->get_sportoviska($id);
        $data['title'] = 'Editovanie športoviska';
        $data['subtitle'] = $data['sportoviska']['nazov'];

        $this->form_validation->set_rules('nazov', 'Nazov', 'required');
        $this->form_validation->set_rules('typ_sportoviska_ID', 'ID_typu_sportoviska', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('sportoviska/edit', $data);
            $this->load->view('template/footer');
        }
        else {
            $this->Sportoviska_model->set_sportoviska($id);
            redirect(base_url().'index.php/Sportoviska');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        $this->Sportoviska_model->delete_sportoviska($id);
        redirect(base_url() . 'index.php/sportoviska');
    }
}