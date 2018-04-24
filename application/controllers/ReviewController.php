<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReviewController extends CI_Controller
{
  public function index()
  {
    echo $_POST["movieid"];
    $this->load->model('MovieModel');
    $this->MovieModel->insertReview();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
}
