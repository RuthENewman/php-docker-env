<?php
    $current_dir = getcwd(); // current directory
    $target_dir = "/uploads/"; // target directory

    $errors = []; // store all potential errors
    $imageTypes = ['jpg', 'png', 'jpeg', 'gif']; // file extensions for valid image types
    $maxSize = 1000000; // max file size of 1MB

    // file globals
    $fileName = $_FILES['imageToUpload']['name'];
    $fileSize = $_FILES['imageToUpload']['size'];
    $fileTmpName = $_FILES['imageToUpload']['tmp_name'];
    $fileType = $_FILES['imageToUpload']['type'];

    // file extension type, image size and height and width of the image
    $fileExtension = strtolower(end(explode('.', $fileName)));
    $imageSize = getimagesize($fileTmpName);
    $width = $imageSize[0];
    $height = $imageSize[1];

    $uploadPath = $current_dir . $target_dir . basename($fileName);

    if (isset($_POST["submit"])) {

        if (! in_array($fileExtension, $imageTypes)) {
            $errors[] = "Sorry, only JPG, PNG, JPEG and GIF image files can be added to your gallery.";
        }

        if ($fileSize > $maxSize) {
            $errors[] = "Sorry, your image file is too large to be added to the gallery.
            Please add a file smaller than 1MB.";
        }

        if (file_exists($target_dir . basename($fileName))) { // confirm not '$uploadPath' instead
            $errors[] = "The image has already been added to your gallery! Try a new image.";
        }

        if (empty($errors)) {
            $uploaded = move_uploaded_file($fileTmpName, $uploadPath);

            if($uploaded) {
                header("Location: gallery.php");
                exit();
            } else {
                echo "An error occured. Please try again or use another file.";
            }
        } else {
            $errorMessage = "These are the errors: " . "\n";
            foreach($errors as $error) {
                $errorMessage .= "\n" . $error . "\n";
            }
            echo $errorMessage;
        }

    }

?>