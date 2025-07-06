<?php
$imagePath = __DIR__ . '/image.png';

// Check if the image file exists
if (file_exists($imagePath)) {
    // Set the content type header - in this case image/png
    header('Content-Type: image/png');

    // Output the image
    readfile($imagePath);
} else {
    // If the image doesn't exist, return a 404 response
    http_response_code(404);
    echo "Image not found";
}
?>
