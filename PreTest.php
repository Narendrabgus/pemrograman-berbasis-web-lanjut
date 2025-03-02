<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
  </head>
  <body>
    <form action="" method="POST">
      <div>
        NIM : <input type="text" name="nim"/>
        <br />
        NAMA : <input type="text" name="nama"/>
      </div>
      <input type="submit" name="simpan" value="simpan" />
    </form>

    <?php 
if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama']; 
    
    echo "Hello $nim, $nama";
}
?>

  </body>
</html>
