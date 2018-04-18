<?php
defined('BASEPATH') or exit('No direct script access allowed');

include 'BaseController.php';

class MovieSingleController extends BaseController
{
  public function detail($mid)
  {
    $this->load->model('MovieModel');
    $this->load->model('ReviewStarModel');
    $this->load->model('ReviewModel');
    $this->load->model('TrailerModel');
    $this->load->model('PageModel');

  	$movie = new MovieModel($mid);
  	$review  = new ReviewModel($mid);
  	$trailer = new TrailerModel($mid);
    $page = new PageModel($mid);

    $total_reviewer = $this->ReviewStarModel->totalReview($movie);
    $average_scores = $this->ReviewStarModel->averageScore($movie);

    $this->load->view('header');
    $this->load->view('movie_single_view', [
    	'movie' => $movie,
    	'total_reviewer' => $total_reviewer,
    	'average_scores' => $average_scores,
    	'review' => $review,
    	'trailer' => $trailer,
    	'page' => $page
    ]);
    $this->load->view('footer');
  }
}
