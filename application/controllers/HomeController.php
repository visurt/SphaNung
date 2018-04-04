<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
  public function index()
  {
    $this->load->model('HomeModel');
    $data['movies'] = $this->HomeModel->getMovie();
    $data['trailers'] = $this->HomeModel->getTrailer();

    $this->load->view('HomeView', $data);

  }
}
