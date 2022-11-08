<?php
class ContactActions {
    public function doIndex() {
        FrontController::show('contact/index');
    }

    public function doMessages() {
        FrontController::show('contact/messages');
    }
    public function doSend() {
        $stmt = Database::$db->prepare('INSERT INTO Messages (sender, email, message) VALUES (:sender, :email, :message)');
        $fields = array(
            ':sender' => $_POST['sender'],
            ':email' => $_POST['email'],
            ':message' => $_POST['message'],
        );

        // Validate email
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || $_POST['sender'] == '' || $_POST['message'] == '') {
            FrontController::show('contact/index');
            FrontController::alert('Please correct any missing or incorrect data', 'error');
        } else {
            $stmt->execute($fields);
            FrontController::show('contact/index');
            FrontController::alert('Message sent');
        }
    }
}