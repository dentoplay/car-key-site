<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['review'])) {
    $review = trim($_POST['review']);
    if ($review !== '') {
        file_put_contents('reviews.txt', $review . "\n", FILE_APPEND | LOCK_EX);
    }
}
?>