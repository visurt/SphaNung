<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
  public function index()
  {
    $this->load->model('MovieModel');
    $this->MovieModel->login();

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
}