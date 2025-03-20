<?php
$conn = new mysqli("localhost", "root", "dandy", "testdefacedb",3307);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment'];
    
    $sql = "INSERT INTO comments (text) VALUES ('$comment')";
    $conn->query($sql);
    echo "Komentar ditambahkan: " . $comment;
}
?>