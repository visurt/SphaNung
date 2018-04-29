<?php

class MovieModel extends CI_Model
{
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

  public function getUser()
  {
    $query = $this->db->get('users');
    return $query->result();
  }

  public function insertReview()
  {
    date_default_timezone_set("Asia/Bangkok");
    $query = array(
      'userid' => $this->input->post('userid'),
      'score' => $this->input->post('score'),
      'rshort' => $this->input->post('review'),
      'movieid' => $this->input->post('movieid'),
      'date' => date('Y-m-d H:i:s')
    );
    $this->db->insert("reviews", $query);
  }

  public function signup()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $displayname = $this->input->post('name');
    $imagename = $_FILES["picture"]["name"];
    $picture = addslashes(file_get_contents($_FILES['picture']['tmp_name']));

    $insert_image = "INSERT INTO users(username, password, name, picture, imagename) VALUES('$username','$password','$displayname','$picture','$imagename')";

    $this->db->query($insert_image);
  }

  public function login()
  {
    $username = $this->input->post('username-l');
    $password = $this->input->post('password-l');

    $sql = "SELECT id,username,password,name,picture,imagename FROM users WHERE username='{$username}' LIMIT 1";
    $result = $this->db->query($sql);
    $row = $result->row();

    if ($result->num_rows() === 1) {
      if ($row->password === $password) {
        $session_data = array(
          'id' => $row->id,
          'username' => $row->username,
          'name' => $row->name,
          'picture' => $row->picture,
          'imagename' => $row->imagename
        );
        $this->set_session($session_data);
      }
    }
  }

  public function set_session($session_data)
  {
    $this->load->library('session');
    $sess_data = array(
      'id' => $session_data['id'],
      'username' => $session_data['username'],
      'name' => $session_data['name'],
      'picture' => $session_data['picture'],
      'imagename' => $session_data['imagename']
    );
    $_SESSION['userinfo'] = $sess_data;
  }

  public function averageScore()
  {
    $query = $this->db->query("SELECT movieid, round(AVG(score),0) AS avg FROM reviews group by movieid");
    return json_decode(json_encode($query->result()), true);
  }

  public function countReview()
  {
    $query = $this->db->query(" SELECT count(*) as count FROM reviews WHERE movieid = '{$_GET['id']}' ");
    if ($query->num_rows() == 0) {
      return 0;
    }
    return $query->row()->count;
  }

  public function getGrossing()
  {
    $query = $this->db->query("SELECT id FROM movies WHERE weekgross != '' ORDER BY weekgross DESC LIMIT 5");
    return $query->result();
  }

  public function searchResult()
  {
    $query = $this->db->query("SELECT * FROM movies 
                                WHERE engname LIKE '%{$_GET['search']}%' OR 
                                thainame LIKE '%{$_GET['search']}%' OR 
                                year LIKE '%{$_GET['search']}%' OR 
                                short LIKE '%{$_GET['search']}%' OR 
                                directer LIKE '%{$_GET['search']}%' OR 
                                cast LIKE '%{$_GET['search']}%' OR 
                                genre LIKE '%{$_GET['search']}%' OR 
                                age LIKE '%{$_GET['search']}%'
                                ");
    return $query->result();
  }

  public function advanceSearch()
  {
    $isPrefix = false;
    $str = "SELECT * FROM movies";
    if (isset($_GET['name']) && $_GET['name'] != '') {
      if ($isPrefix) {
        $str .= " AND (engname LIKE '%{$_GET['name']}%' OR thainame LIKE '%{$_GET['name']}%')";
      } else {
        $str .= " WHERE (engname LIKE '%{$_GET['name']}%' OR thainame LIKE '%{$_GET['name']}%')";
        $isPrefix = true;
      }
    }
    if (isset($_GET['genre']) && $_GET['genre'] != '') {
      if ($isPrefix) {
        $str .= " AND genre LIKE '%{$_GET['genre']}%'";
      } else {
        $str .= " WHERE genre LIKE '%{$_GET['genre']}%'";
        $isPrefix = true;
      }

    }
    if (isset($_GET['from']) && $_GET['from'] != '') {
      if ($isPrefix) {
        $str .= " AND year >= {$_GET['from']}";
      } else {
        $str .= " WHERE year >= {$_GET['from']}";
        $isPrefix = true;
      }
    }
    if (isset($_GET['to']) && $_GET['to'] != '') {
      if ($isPrefix) {
        $str .= " AND year <= {$_GET['to']}";
      } else {
        $str .= " WHERE year <= {$_GET['to']}";
        $isPrefix = true;
      }
    }

    $query = $this->db->query($str);
    return $query->result();
  }
}

?>