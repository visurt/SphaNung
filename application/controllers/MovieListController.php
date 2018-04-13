<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MovieListController extends CI_Controller
{
  public function index()
  {
    require_once('MovieController.php');
    $MC = new MovieController();
    $MC->render('MovieListView');
  }
}
