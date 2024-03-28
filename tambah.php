<?php
   require "function.php";
   
   if(isset($_POST['submit'])){
      $data = [
        'nama' => $_POST['nama'],
        'gambar' => $_FILES['gambar']['name']
      ];

    $direktori = "Berkas/";
    $file_name = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
   

    move_uploaded_file($file_tmp, $direktori.$file_name);

        if(tambah($data) > 0){
            echo "
            <script>
                alert('Data berhasil ditambahkan!!!');
                document.location.href = 'index.php';
            </script>
        ";
        }else{
            echo "
            <script>
                alert('Data berhasil ditambahkan!!!');
                document.location.href = 'index.php';
            </script>
        ";
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Form Tambah Data</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>
</html>
