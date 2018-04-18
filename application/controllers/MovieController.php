<?php
defined('BASEPATH') or exit('No direct script access allowed');

include 'BaseController.php';

class MovieController extends BaseController
{
  public function render($view)
  {
    $this->load->model('MovieModel');
    $data['movies'] = $this->MovieModel->getMovie();
    $data['trailers'] = $this->MovieModel->getTrailer();
    $data['reviews'] = $this->MovieModel->getReview();
    $data['pages'] = $this->MovieModel->getPage();

    $this->load->model('ReviewStarModel');
    

    $this->load->view('header');
    $this->load->view($view, $data);
    $this->load->view('footer');
  }
}
