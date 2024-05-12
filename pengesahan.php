<?php
$folder_name = $_POST['folder_name'];
$file_name = $_POST['file_name'];
$file_path = $folder_name . '/' . $file_name . '.txt';

if (!file_exists($folder_name)) {
    mkdir($folder_name, 0777, true);
}

$file = fopen($file_path, 'w');
fwrite($file, '');
fclose($file);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pengesahan</title>
</head>
<body>
    <h2>Folder dan Fail Berjaya Dicipta</h2>
    <p>Folder: <?php echo htmlspecialchars($folder_name); ?></p>
    <p>Fail: <?php echo htmlspecialchars($file_name); ?>.txt</p>

    <form action="mesej.php" method="post">
        <input type="hidden" name="folder_name" value="<?php echo htmlspecialchars($folder_name); ?>">
        <input type="hidden" name="file_name" value="<?php echo htmlspecialchars($file_name); ?>">
        <input type="submit" value="Isi Maklumat">
    </form>
</body>
</html>
