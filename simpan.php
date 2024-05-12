<!-- simpan.php -->

<?php
$folder_name = $_POST['folder_name'];
$file_name = $_POST['file_name'];

$message = $_POST['mesej'];

$file_path = $folder_name . '/' . $file_name . '.txt';

$file = fopen($file_path, 'a');

fwrite($file, $message . PHP_EOL); 
fclose($file);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>simpan</title>
</head>
<body>
    <h2>Telah disimpan</h2>
    <form action="semak.php" method="post">
        <input type="hidden" name="folder_name" value="<?php echo htmlspecialchars($folder_name); ?>">
        <input type="hidden" name="file_name" value="<?php echo htmlspecialchars($file_name); ?>">
        <input type="submit" value="Semak">
    </form>
</body>
</html>
