<?php
defined('BASEPATH') or exit('No direct script access allowed');


class TrailerModel extends CI_Model
{

  public $id = null;
  public $link;
  public $icon;
  public $duration;

  public function __construct($id = null)
  {
    if (! $id ){
      return;
    }

    $result = $this->db->query("SELECT * FROM trailers WHERE id = $id");

    if ($result->num_rows() == 0){
      return;
    }

    $info = $result->row();
    $this->id = $info->id;
    $this->link = $info->link;
    $this->icon = $info->icon;
    $this->duration = $info->duration;
  }

  public function isExist() 
  {
    return !is_null($this->id);
  }
  
}

?>