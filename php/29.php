<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['cv'])) {
    $file = $_FILES['cv'];
    $allowed_types = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
    $max_size = 1 * 1024 * 1024; // 1 MB

    // Define the upload directory
    $upload_dir = __DIR__ . '/uploads/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true); // Create the directory if it doesn't exist
    }

    if (in_array($file['type'], $allowed_types) && $file['size'] <= $max_size) {
        $new_name = $upload_dir . uniqid() . '-' . $file['name'];

        // Debugging outputs
        echo "Upload Directory: $upload_dir<br>";
        echo "File Destination: $new_name<br>";

        if (move_uploaded_file($file['tmp_name'], $new_name)) {
            echo "File uploaded successfully!";
        } else {
            echo "Failed to move the file!";
        }
    } else {
        echo "Invalid file type or size!<br>";
        echo "File Type: " . $file['type'] . "<br>";
        echo "File Size: " . $file['size'] . " bytes<br>";
    }
} else {
    echo "No file uploaded or invalid request!";
}
?>

<form method="post" enctype="multipart/form-data">
    Upload CV (PDF/DOCX): <input type="file" name="cv" required><br>
    <button type="submit">Upload</button>
</form>
