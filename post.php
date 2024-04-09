<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';

function createDBConnection(): mysqli
{
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function closeDBConnection(mysqli $conn): void
{
    $conn->close();
}

function getPostContent(mysqli $conn, $idToFind, &$post): void
{
    $sql = "SELECT *, UNIX_TIMESTAMP(publish_date) AS publish_date FROM post WHERE post_id =  $idToFind";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $post = $row;
        }
    } else {
        $post = null;
        echo "Post with id {$idToFind} has not been found!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/post.css">
    <title>
        The Road Ahead
    </title>
</head>

<body>
    <header class="header">
        <nav class="navigate__list">
            <a class="header-navigate-logo"><img src="images/Esc.svg" alt="logo" /></a>
            <a class="header-navigate-elements">Home</a>
            <a class="header-navigate-elements">Categories</a>
            <a class="header-navigate-elements">About</a>
            <a class="header-navigate-elements">Contact</a>
        </nav>
    </header>
    <?php
    $post = [];
    $postId = $_GET['id'];
    $conn = createDBConnection();
    getPostContent($conn, $postId, $post);
    closeDBConnection($conn);
    if ($post != null)
        include 'post_preview.php';
    ?>
    <footer class="footer">
        <div class="footer-area">
            <nav class="footer-navigate__list">
                <a class="footer-navigate-logo"><img src="images/Esc1.svg" alt="logo-top" /></a>
                <a class="footer-navigate-elements">Home</a>
                <a class="footer-navigate-elements">Categories</a>
                <a class="footer-navigate-elements">About</a>
                <a class="footer-navigate-elements">Contact</a>
            </nav>
        </div>
    </footer>
</body>

</html>