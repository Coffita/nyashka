<?php
require_once __DIR__ . '/../libs/DB.php';

class Post {
    public $id;
    public $title;
    public $text;
    public $is_private;
    public $date_added;

    public function __construct ($title, $text) {
        $this->title = $title;
        $this->text = $text;
        $this->is_private = false;
    }

    public function create() {
        global $conn;

        $sql = "INSERT INTO posts (title, text, is_private, date_added) VALUES ('$this->title', '$this->text', '$this->is_private', NOW())";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return $conn->error;
        }

    }

    public function delete() {
        global $conn;

        $sql = "DELETE FROM posts WHERE id='$this->id'";

        if ($conn->query($sql) === TRUE) {
            return TRUE;
        } else {
            return $conn->error;
        }

    }

    public function save() {
        global $conn;

        $sql = "UPDATE posts SET title='$this->title', text='$this->text' WHERE id='$this->id'";

        $result = $conn->query($sql);

        return $result;

    }


    public static function find_all() {
        global $conn;

        $sql = "SELECT * FROM posts";

        $posts = array();

        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $post = new Post($row['title'], $row['text']);
            $post->id = $row['id'];
            $post->is_private = $row['is_private'];
            $post->date_added = $row['date_added'];

            $posts[] = $post;
        }

        return $posts;
    }

    public static function find_by_id($id) {
        global $conn;

        $sql = "SELECT * FROM posts WHERE id='$id'";

        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        $post = new Post($row['title'], $row['text']);
        $post->id = $row['id'];
        $post->is_private = $row['is_private'];
        $post->date_added = $row['date_added'];

        return $post;
    }


    public function get_error() {

    }

    public function change_visibility() {
        global $conn;

        $this->is_private = !$this->is_private;

        $sql = "UPDATE posts SET is_private='$this->is_private' WHERE id='$this->id'";

        $result = $conn->query($sql);

        return $result;
    }





}
