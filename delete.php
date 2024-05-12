<?php
$folder_name = $_POST['folder_name'];
$file_path = $folder_name . '/*';

array_map('unlink', glob($file_path));

if (is_dir($folder_name)) {
    closedir(opendir($folder_name));
    rmdir($folder_name);
}

header("Location: mula.php");
exit();
?>