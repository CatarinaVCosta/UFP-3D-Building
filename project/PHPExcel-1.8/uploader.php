<!DOCTYPE html>
<html>
    <body>

        <form  method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>

    </body>
</html>

<?php
$target_dir = "/var/www/html/projecto-lpji/PHPExcel-1.8/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

if (isset($_POST["submit"])) {

    print_r($_FILES);
}
?>


