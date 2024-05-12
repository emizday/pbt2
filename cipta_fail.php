<!-- cipta_fail.php -->

<form action="pengesahan.php" method="post">
  <input type="hidden" name="folder_name" value="<?php echo htmlspecialchars($_POST['nama_folder']); ?>">
  <label for="file_name">Nama Fail:</label>
  <input type="text" id="file_name" name="file_name"><br><br>
  <input type="submit" value="Cipta Fail">
</form>
