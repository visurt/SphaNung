<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SignUpController extends CI_Controller
{
  public function index()
  {
    $this->load->model('MovieModel');
    $this->MovieModel->signup();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
}
