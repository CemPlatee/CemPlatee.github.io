<?php
header('Content-Type: application/json');

$directory = 'images';
$images = [];

if (is_dir($directory)) {
    if ($handle = opendir($directory)) {
        while (($file = readdir($handle)) !== false) {
            if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif'])) {
                $images[] = $file;
            }
        }
        closedir($handle);
    }
}

echo json_encode($images);