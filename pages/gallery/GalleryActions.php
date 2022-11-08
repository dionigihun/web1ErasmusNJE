<?php
class GalleryActions {
    public function doIndex() {
        FrontController::show('gallery/index');
    }
    public function doUpload() {
        $target_dir = "assets/uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if(isset($_POST["submit"]) && $_FILES['fileToUpload']['name']) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }

        if (file_exists($target_file)) {
            $uploadOk = 0;
        }

        if ($_FILES["fileToUpload"]["size"] > 500000) {
            $uploadOk = 0;
        }
		
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            FrontController::show('gallery/index');
            FrontController::alert('The file cannot be uploaded.', 'error');

        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                FrontController::show('gallery/index');
                FrontController::alert('Successful upload.', 'success');
            } else {
                FrontController::show('gallery/index');
                FrontController::alert('Error while uploading.', 'error');
            }
        }
    }
}