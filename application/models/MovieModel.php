<?php
defined('BASEPATH') or exit('No direct script access allowed');


class MovieModel extends CI_Model
{

  public $id = null;
  public $engname;
  public $thainame;
  public $poster;
  public $year;
  public $short;
  public $trailerid;
  public $directer;
  public $cast;
  public $genre;
  public $age;
  public $runtime;
  public $date;

  public function __construct($id = null)
  {
    if (! $id ){
      return;
    }

    $result = $this->db->query("SELECT * FROM movies WHERE id = $id");

    if ($result->num_rows() == 0){
      return;
    }

    $info = $result->row();
    $this->id = $info->id;
    $this->engname = $info->engname;
    $this->thainame = $info->thainame;
    $this->poster = $info->poster;
    $this->year = $info->year;
    $this->short = $info->short;
    $this->trailerid = $info->trailerid;
    $this->directer = $info->directer;
    $this->cast = $info->cast;
    $this->genre = $info->genre;
    $this->age = $info->age;
    $this->runtime = $info->runtime;
    $this->date = $info->date;
  }

  public function isExist() 
  {
    return !is_null($this->id);
  }

  public function getId() 
  {
    return intval($this->id);
  }

  ///////////////////////////////////////////

  public function getMovie()
  {
    $query = $this->db->get('movies');
    return $query->result();
  }

  public function getTrailer()
  {
    $query = $this->db->get('trailers');
    return $query->result();
  }

  public function getReview()
  {
    $query = $this->db->get('reviews');
    return $query->result();
  }

  public function getPage()
  {
    $query = $this->db->get('pages');
    return $query->result();
  }
}

?>