<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'ClashBlog';
$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn,"utf8");
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

$title = mysqli_real_escape_string($conn, $_POST['title']);
$image = mysqli_real_escape_string($conn, $_POST['image']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$categoryID = mysqli_real_escape_string($conn, $_POST['category']);

$query = "INSERT INTO `news` (`id`, `title`, `image`, `content`, `category`) VALUES (NULL, '$title', '$image', '$content', '$categoryID')";
if (mysqli_query($conn, $query)) {
    header('Location: index.php');
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
