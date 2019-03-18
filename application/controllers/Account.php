<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('Model_Account');
    }

    public function signup() {

        $username = $_POST['email'];
        $password = $_POST['psw'];



        $this->Model_Account->setUsername($username);
        $this->Model_Account->setPassword($password);

        $this->Model_Account->save();


        $this->load->helper('url');
        $this->load->view('common/header');
        $this->load->view('Account');
        $this->load->view('common/footer');
    }

}
