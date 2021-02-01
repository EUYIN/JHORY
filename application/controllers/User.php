<?php

defined('BASEPATH') OR exit('No direct script access allowed!');

class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $data['title'] = 'LOGUEATE';

        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');
        $this->load->view('login');
        $this->load->view('template/footer');
    }

    public function register()
    {
        $data['title'] = 'Register';

        $this->load->view('template/header', $data);
        $this->load->view('template/navigation');
        $this->load->view('register');
        $this->load->view('template/footer');
    }

}