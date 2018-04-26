<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SearchController extends CI_Controller
{
  public function index()
  {
    require_once('MovieController.php');
    $MC = new MovieController();
    $MC->render('SearchView');
  }

  public function searchSide()
  {
    require_once('MovieController.php');
    $MC = new MovieController();
    $MC->render('SearchView');
  }
}
