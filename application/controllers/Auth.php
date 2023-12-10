<?php

    class Auth extends CI_Controller {
        public function index(){

            $data['judul'] = 'Halaman Login';
            $this->load->view('auth/auth_navbar', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('auth/auth_footer', $data);


        }

    }