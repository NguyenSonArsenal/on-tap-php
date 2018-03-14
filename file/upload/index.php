<?php
    $uploadOk = 1;

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $target_dir = "uploads/";

        if ($_FILES['fileToUpload']['size'] > 0 &&
            getimagesize($_FILES['fileToUpload']['tmp_name']))
        {
            $img_name = $_FILES['fileToUpload']['name'];

            $target_file = $target_dir . $img_name;

            echo $target_file;

            $imgTypeFile = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $uploadOk = 1;

            // check file size
            if ($_FILES['fileToUpload']['size'] > 50000)
            {
                echo "Sorry, your image is too large. 
                Please upload image < 5MB";
                $uploadOk = 0;
            }

            // check if file already exists
            if (file_exists($target_file))
            {
                echo 'Sorry, file already exists';
                $uploadOk = 0;
            }

            if ($uploadOk == 0)
            {
                echo 'Sorry, your file was not uploaded';
            }
            else
            {
                if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file))
                {
                    echo "The image has been uploaded";
                }
                else
                {
                    echo 'Sorry, there was an error uploading your image';
                }
            }
        }
        else
        {
            $uploadOk = 0;
            echo "Image must be no empty";
        }
    }
?>

<!DOCTYPE html>
<html>
<body>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload">
    <input type="submit"
           value="upload" name="submit">
</form>

</body>
</html>