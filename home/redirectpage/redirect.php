<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    if (!empty($url)) {
        // Выполним редирект по переданному URL
        header("Location: " . $url);
        exit();
    }
} else {
    echo "Error: URL parameter is missing.";
}
?>
