<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ReviewStarModel extends CI_Model {


	public function vote(UserModel $user, MovieModel $movie, $star) {
		$userid = $user->getId();
		$movieid = $movie->getId();
		$this->db->query("REPLACE INTO reviewstars (user_id,movie_id,star,rate_at) VALUES ($userid, $movieid, $star, now())");
	}

	public function totalReview(MovieModel $movie) {
		$movieid = $movie->getId();
		$result = $this->db->query("SELECT count(*) AS totalreview FROM reviewstars WHERE movie_id = $movieid ");
		if ($result->num_rows() == 0){
     	 return 0;
    	}
    	return $result->row()->totalreview ;
	}

	public function averageScore(MovieModel $movie) {
		$movieid = $movie->getId();
		$result = $this->db->query("SELECT AVG(star) AS scoreaverage FROM reviewstars WHERE movie_id = $movieid ");
		if ($result->num_rows() == 0){
     	 return 0;
    	}
    	return $result->row()->scoreaverage;
	}

}