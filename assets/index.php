<?php
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

// Check if the request is coming from your local server (e.g., localhost)
if (empty($referer) || strpos($referer, 'localhost') !== false) {
    header("HTTP/1.1 403 Forbidden");
    exit();
}
header("Location: ../", true, 301);
exit();
?>
