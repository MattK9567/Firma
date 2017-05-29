<?php
class Home extends CI_Controller {
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('home');
        $this->load->view('template/footer');
    }

    public function o_nas()
    {
        $this->load->view('template/header');
        $this->load->view('o_nas');
        $this->load->view('template/footer');
    }

    public function kontakt()
    {
        $this->load->view('template/header');
        $this->load->view('kontakt');
        $this->load->view('template/footer');
    }
}