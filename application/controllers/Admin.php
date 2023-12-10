<?php

    class Admin extends CI_Controller {
        public function index(){

            $data['judul'] = 'Data Buku';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            // $this->load->view('templates/sidebar');
            $this->load->view('admin/dataBuku');
            $this->load->view('templates/footer');


        }

    }