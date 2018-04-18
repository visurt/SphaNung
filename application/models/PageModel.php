<?php
defined('BASEPATH') or exit('No direct script access allowed');


class PageModel extends CI_Model
{

  public $id = null;
  public $name;
  public $logo;
  
  public function __construct($id = null)
  {
    if (! $id ){
      return;
    }

    $result = $this->db->query("SELECT * FROM pages WHERE id = $id");

    if ($result->num_rows() == 0){
      return;
    }

    $info = $result->row();
    $this->id = $info->id;
    $this->name = $info->name;
    $this->logo = $info->logo;

  }

  public function isExist() 
  {
    return !is_null($this->id);
  }
  
}
