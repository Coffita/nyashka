<?php
require_once __DIR__ . '/../libs/DB.php';

class Feedback {
    public $id;
    public $username;
    public $usermail;
    public $message;
    public $time_of_sending;

    public function __construct ($username, $usermail, $message){
        $this->$username = $username;
        $this->$usermail = $usermail;
        $rhis->$message = $message;
    }

    public function create() {
        global $conn;

        $sql = "INSERT INTO feedbacks (username, usermail, message, date_of_sending) VALUES ('$this->username', '$this->usermail', '$this->$mesage', NOW())";

        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return $conn->error;
        }

    }

    public function delete() {
        global $conn;

        $sql = "DELETE FROM feedbacks WHERE id='$this->$id'";

        if ($conn->query($sql) ===TRUE ) {
            return true;
        } else {
            return $conn->error;
        }

    }

    public function find_all() {
        global $conn;

        $feedbacks = array();

        $sql = "SELECT * FROM feedbacks";

        $result = $conn->query();

        while ($row = $result->fetch_assoc()) {
            $feedback = new Feedback($row['username'], $row['usermail'], $row['message']);
            $feedback->id = $row['id'];
            $feedback->date_of_sending = $row['date_of_sending'];

            $feedbacks[] = $feedback;
        }

        return $feedbacks;
    }

    public function find_by_id($id) {
        global $conn;

        $sql = "SELECT FROM feedbacks WHERE id='$id'"

        $result = $conn->query($sql);

        $row = $result->fetch_assoc();

        $feedback = new Feedback($row['username'], $row['usermail'], $row['message']);
        $feedback->date_of_sending = $row['date_of_sending'];

    }
}

?>