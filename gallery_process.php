<?php

echo "<pre>";

$saveFolder = "photos";

if (!is_dir($saveFolder)) {
    mkdir($saveFolder, 0777);
}

// print_r($_FILES);

// print_r(pathinfo($_FILES["upload"]["name"])["extension"])

$error = false;

foreach ($_FILES["upload"]["name"] as $key => $name) {
    $ext = pathinfo($name)["extension"];
    $saveFileName = $saveFolder . "/" . uniqid() . "." . $ext;

    if (!move_uploaded_file($_FILES["upload"]["tmp_name"][$key], $saveFileName)) {
        $error = true;
    };
}
if ($error === false) {
    header("location:gallery.php");
}





?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/style.css">
    <title>Gallery Process</title>
</head>

<body>

    <!-- <main class="max-w-[1000px] mx-auto py-10 px-50"> -->
    <!-- Sidebar -->
    <?php //include("./sidebar.php") 
    ?>
    <!-- End Sidebar -->




    <!-- </main> -->
    <script src="./node_modules/preline/dist/preline.js"></script>

</body>

</html>