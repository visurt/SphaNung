<?php
defined('BASEPATH') or exit('No direct script access allowed');

include 'BaseController.php';

class MovieListController extends BaseController
{
  public function index()
  {
    require_once('MovieController.php');
    $MC = new MovieController();
    $MC->render('movie_list_view');
  }
}
