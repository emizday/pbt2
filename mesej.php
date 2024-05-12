<!-- mesej.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mesej</title>
</head>
<body>
    <h2>Mesej untuk Fail</h2>
    <?php
        // Retrieve folder and file name from previous page
        $folder_name = $_POST['folder_name'];
        $file_name = $_POST['file_name'];
    ?>
    <p>Nama fail: <?php echo htmlspecialchars($file_name); ?>.txt</p>
    <form action="simpan.php" method="post">
        <!-- Hidden input fields to pass folder and file names to the next page -->
        <input type="hidden" name="folder_name" value="<?php echo htmlspecialchars($folder_name); ?>">
        <input type="hidden" name="file_name" value="<?php echo htmlspecialchars($file_name); ?>">
        <label for="mesej">Mesej:</label><br>
        <textarea id="mesej" name="mesej" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Hantar">
    </form>
</body>
</html>
