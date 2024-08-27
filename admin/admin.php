<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css?v=<?php echo time(); ?>">
</head>
<body>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

 include 'cnn.php';

$sno = $_POST['sno'];
$title = $_POST['title'];
$images = $_POST['images'];
$sql =  "INSERT INTO `myshop` (`sno`,`title`, `images`) VALUES ('$sno','$title', '$images');";
$result = mysqli_query($conn, $sql);

}
?>
    <form action="admin.php" method="post">
        <label for="sno">Sno.:</label><br>
        <input type="number" id="sno" name="sno"><br><br>

        <label for="title">Title:</label><br>
        <input type="title" id="title" name="title"><br><br>

        <label for="images">Images:</label><br>
        <input type="images" id="images" name="images"><br><br>

        <input type="submit" value="Submit">
</form>
</body>
</html>