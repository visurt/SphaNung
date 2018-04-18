<?php
defined('BASEPATH') or exit('No direct script access allowed');

include 'BaseController.php';

class HomeController extends BaseController
{
  public function index()
  {
    require_once('MovieController.php');
    $MC = new MovieController();
    $MC->render('home_view');
  }
}
