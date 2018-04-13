<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MovieController extends CI_Controller
{
  public function render($view)
  {
    $this->load->model('MovieModel');
    $data['movies'] = $this->MovieModel->getMovie();
    $data['trailers'] = $this->MovieModel->getTrailer();
    $data['reviews'] = $this->MovieModel->getReview();
    $data['pages'] = $this->MovieModel->getPage();

    $this->load->view('header');
    $this->load->view($view, $data);
    $this->load->view('footer');
  }
}
