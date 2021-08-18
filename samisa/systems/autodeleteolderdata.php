<?php



$expire = strtotime('-6 HOURS');

$files = glob($path . 'video/*');

foreach ($files as $file) {

    // Skip anything that is not a file
    if (!is_file($file)) {
        continue;
    }

    // Skip any files that have not expired
    if (filemtime($file) > $expire) {
        continue;
    }

    unlink($file);
}




?>