<?php
defined('BASEPATH') or exit('No direct script access allowed');


class ReviewModel extends CI_Model
{

  public $id = null;
  public $pageid;
  public $movieid;
  public $score;
  public $rshort;
  public $rlong;
  public $date;

  public function __construct($id = null)
  {
    if (! $id ){
      return;
    }

    $result = $this->db->query("SELECT * FROM reviews WHERE id = $id");

    if ($result->num_rows() == 0){
      return;
    }

    $info = $result->row();
    $this->id = $info->id;
    $this->pageid = $info->pageid;
    $this->movieid = $info->movieid;
    $this->score = $info->score;
    $this->rshort = $info->rshort;
    $this->rlong = $info->rlong;
    $this->date = $info->date;
  }

  public function isExist() 
  {
    return !is_null($this->id);
  }

  public function insertReview()
  {
    date_default_timezone_set("Asia/Bangkok");
    $query = array(
      'id' => $this->input->post('id'),
      'score' => $this->input->post('score'),
      'rshort' => $this->input->post('review'),
      'movieid' => $this->input->post('movieid'),
      'date' => date('Y-m-d H:i:s')
    );
    $this->db->insert("reviews", $query);
  }
  
}

?>