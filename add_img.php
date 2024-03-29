<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php
echo '<div class="form_container">
<h1>Gallery information</h1>

<form action=" '.insertgalleryimage($conn).' " method="post" enctype="multipart/form-data">
<div class="form_group">
    <input type="file" name="image_photo">
</div>
<div class="form_group">
<label for="">Title</label>
    <input type="text" name="title">
</div>
<div class="form_group">
<label for="">Description</label>
    <input type="text" name="image_desc">
</div>
<div class="form_group">
    <input type="submit" name="addimage">
</div>

</form>
</div>';

