<?php
class RegistrationActions {
    public function doIndex() {
        FrontController::show('registration/index');
    }
    public function doRegister() {

        $stmt = Database::$db->prepare('INSERT INTO Users (username, firstname, lastname, email, password) VALUES (:username, :firstname, :lastname, :email, :password)');
        $stmt->execute(array(
            ':username' => $_POST['username'],
            ':firstname' => $_POST['firstname'],
            ':lastname' => $_POST['lastname'],
            ':email' => $_POST['email'],
            ':password' => $_POST['password']
        ));
		 if ($_POST['email'] == $user['email'] ) {
            FrontController::alert('Duplicated mail', 'error');
        } else {
            $stmt->execute($fields);
            FrontController::alert('Successful registration', 'success');
			FrontController::show('registration/index');
    }
}