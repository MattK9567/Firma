<?php

class Rezervacia extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rezervacia_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['rezervacie'] = $this->Rezervacia_model->get_rezervacie();
        $data['title'] = 'Rezervácie';

        $this->load->view('template/header', $data);
        $this->load->view('rezervacia/index', $data);
        $this->load->view('template/footer');
    }

    public function view($id = NULL)
    {
        $data['rezervacie'] = $this->Rezervacia_model->get_rezervacie($id);

        if(empty($data['rezervacie']))
        {
            show_404();
        }

        $data['title'] = $data['rezervacie']['ID'];

        $this->load->view('template/header', $data);
        $this->load->view('rezervacia/view', $data);
        $this->load->view('template/footer');
    }

    public function create()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('dsportoviska_ID', 'Športovisko', 'required');
        $this->form_validation->set_rules('dstatus_rezervacie_ID', 'Status rezervácie', 'required');
        $this->form_validation->set_rules('dzakaznici_ID', 'Zákazník', 'required');
        $this->form_validation->set_rules('ddatum', 'Dátum', 'required');
        $this->form_validation->set_rules('dcena', 'Cena', 'required');
        $this->form_validation->set_rules('dcas', 'Čas', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('rezervacia/create');
            $this->load->view('template/footer');
        }
        else {
            $data = array(
                'sportoviska_ID' => $this->input->post('dsportoviska_ID'),
                'status_rezervacie_ID' => $this->input->post('dstatus_rezervacie_ID'),
                'zakaznici_ID' => $this->input->post('dzakaznici_ID'),
                'datum' => $this->input->post('ddatum'),
                'cena' => $this->input->post('dcena'),
                'cas' => $this->input->post('dcas'),
            );

            $this->Rezervacia_model->insert_rezervacie($data);
            $data['message'] = 'Dáta úspešne vložené';

            $this->load->view('template/header', $data);
            $this->load->view('rezervacia/create', $data);
            $this->load->view('template/footer');
        }
    }

    public function edit()
    {
        $id = $this->uri->segment(3);

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['rezervacie'] = $this->Rezervacia_model->get_rezervacie($id);
        $data['title'] = 'Editovanie rezervácie';

        $this->form_validation->set_rules('sportoviska_ID', 'Sportovisko', 'required'); //spravit cez select
        $this->form_validation->set_rules('status_rezervacie_ID', 'Status rezervacie', 'required'); //spravit cez select
        $this->form_validation->set_rules('zakaznici_ID', 'Zakaznik', 'required'); //spravit cez select
        $this->form_validation->set_rules('datum', 'Datum', 'required');
        $this->form_validation->set_rules('cena', 'Cena', 'required');
        $this->form_validation->set_rules('cas', 'Cas', 'required');

        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('rezervacia/edit', $data);
            $this->load->view('template/footer');
        }
        else {
            $this->Rezervacia_model->set_rezervacie($id);
            redirect(base_url().'index.php/rezervacia');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        $this->Rezervacia_model->delete_rezervacie($id);
        redirect(base_url() . 'index.php/rezervacia');
    }
}