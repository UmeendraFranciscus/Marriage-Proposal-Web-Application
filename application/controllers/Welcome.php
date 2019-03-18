<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('common/header');
        $this->load->view('index');
        $this->load->view('common/footer');
    }

    public function Account() {
        $this->load->view('common/header');
        $this->load->view('Account');
        $this->load->view('common/footer');
    }

    public function AccountPart() {
      
        $this->load->view('sub/basicdetails');
      
    }

}
