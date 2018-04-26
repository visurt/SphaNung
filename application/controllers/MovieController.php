<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MovieController extends CI_Controller
{
  public function render($view)
  {
    $this->load->library('session');
    $this->load->model('MovieModel');
    $data['movies'] = $this->MovieModel->getMovie();
    $data['trailers'] = $this->MovieModel->getTrailer();
    $data['reviews'] = $this->MovieModel->getReview();
    $data['pages'] = $this->MovieModel->getPage();
    $data['users'] = $this->MovieModel->getUser();
    $data['scores'] = $this->MovieModel->averageScore();
    if (isset($_GET['id'])) {
      $data['count'] = $this->MovieModel->countReview();
    }

    $this->load->view('header');
    $this->load->view($view, $data);
    $this->load->view('footer');
  }
}
