<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogoutController extends CI_Controller
{
  public function index()
  {
    $this->load->library('session');
    unset($_SESSION['userinfo']);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
}