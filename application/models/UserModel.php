<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{

	private $id = null;
	private $username;
	private $password;
	private $firstname;
  private $lastname;
  private $email;
  private static $current = null;

  public function __construct($id = null)
  {

    //$this->load->library('session');
    //session_start();
    if(is_null($id)) {
      if( isset($_SESSION['user']) ){
        $this->id = $_SESSION['user']['id'];
        $this->username = $_SESSION['user']['username'];
        $this->firstname = $_SESSION['user']['firstname'];
        $this->lasttname = $_SESSION['user']['lastname'];
        $this->password = $_SESSION['user']['password'];
        $this->email = $_SESSION['user']['email'];
      }
    }
    else {
      $result = $this->db->query("SELECT * FROM users WHERE id = $id");
      if($result->num_rows() == 1) {
        $info = $result->row();
        $this->id = $info->id;
        $this->username = $info->username;
        $this->firstname = $info->firstname;
        $this->lastname = $info->lastname;
        $this->password = $info->password;
        $this->email = $info->email;
      }
    }
  }

  public static function login($username,$password)
  {
     $result = static::getCurrentUser()->db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");

    static::logout();
     if($result->num_rows() == 1) {
        $info = $result->row();
        $_SESSION['user']['id'] = $info->id;
        $_SESSION['user']['username'] = $info->username;
        $_SESSION['user']['firstname'] = $info->firstname;
        $_SESSION['user']['lastname'] = $info->lastname;
        $_SESSION['user']['password'] = $info->password;
        $_SESSION['user']['email'] = $info->email ;
     }
  }

  public static function logout()
  {
    static::$current = null;
    unset($_SESSION['user']);
  }

  public static function isLogin()
  {
    return ! is_null(static::getCurrentUser()->id);
  }

  public function getId()
  {
    return intval($this->id);
  }

  public function getFirstName()
  {
    return $this->firstname;
  }

  public function getLastName()
  {
    return $this->lastname;
  }

    public function getEmail()
  {
    return $this->email;
  }

  public function equals(UserModel $other){
    return $this->id == $other->id;
  }

  public static function getCurrentUser() 
  {
  	if( is_null(static::$current) ){
  		static::$current = new static();
  	}
  	return static::$current;
  }

  public function checkDuplicateEmail($email) {
    $result = static::getCurrentUser()->db->query("SELECT email FROM users LIKE email = '$email' ");
    return  $result->count_all_results();
  }

  public function checkduplicateUsername($username) {
    $result = static::getCurrentUser()->db->query("SELECT username FROM users LIKE username = '$username' ");
    return  $result->count_all_results();
  }

  public function registerUser($data) {
    if($this->db->insert('users', $data))
    {
      return  $this->db->insert_id();
    }
    else
    {
      return false;
    }
  }

}
