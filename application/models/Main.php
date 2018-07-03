<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public $error;

    public function postsCount() {
        return $this->db->column('SELECT COUNT(id) FROM posts');
    }

    public function postsList($route) {
        $max = 10;
        $params = [
            'max' => $max,
            'start' => (($route['page'] ?? 1) - 1) * $max,
        ];
        return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
    }

    public function postsTop() {
        return $this->db->row('SELECT * FROM posts WHERE date BETWEEN DATE_ADD(current_date, INTERVAL -7 DAY) AND current_date ORDER BY views DESC');
    }
}