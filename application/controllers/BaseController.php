<?php
defined('BASEPATH') or exit('No direct script access allowed');

if( ! class_exists('BaseController')){
	class BaseController extends CI_Controller
	{
		protected $user;
		public function __construct()
		{
		  parent::__construct();
		  $this->load->database();
		   $this->load->model('UserModel');
		}

		public function user(){
		  	return UserModel::getCurrentUser();
		}
	}
}