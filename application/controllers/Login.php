<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

    }
    public function viewLogin()
    {
        $this->load->view("login/login_view");
    }
}