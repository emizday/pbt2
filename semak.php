<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Semak</title>
</head>
<body>
    <h2>Baca file di sini...</h2>
    <?php
    $folder_name = $_POST['folder_name'];
    $file_name = $_POST['file_name'];
    $file_path = $folder_name . '/' . $file_name . '.txt';

    if (file_exists($file_path)) {
        $file_contents = file_get_contents($file_path);
        echo nl2br(htmlspecialchars($file_contents));
    } else {
        echo "Fail tidak wujud.";
    }
    ?>
    <br><br>
    <form action="delete.php" method="post" onsubmit="return confirm('Buang folder?')">
        <input type="hidden" name="folder_name" value="<?php echo htmlspecialchars($folder_name); ?>">
        <input type="hidden" name="file_name" value="<?php echo htmlspecialchars($file_name); ?>">
        <input type="submit" value="Delete">
    </form>
    <br>
    <form action="mula.php" method="get">
        <input type="submit" value="Kembali ke Mula">
    </form>
</body>
</html>