<?php
  require "function.php";

  $mahasiswa = query("SELECT * FROM document");

   if(isset($_POST['submit'])){
    $mahasiswa = cari($_POST['keyword']);
   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>HALAMAN UTAMA</h1>

     

     <form action="" method="post">
        <input type="text" name="keyword" placeholder="keyword">
        <button type="submit" name="submit">Submit</button>
     </form>

     <a href="tambah.php">+ADD USER</a>
     <table border="1" cellpadding="10">
       <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Gambar</th>
       </tr>
       <?php
            $id = 1;
            foreach($mahasiswa as $mhs) :
       ?>
       <tr>
           <td><?= $id; ?></td>
           <td>
               <a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a>
               <a href="hapus.php?id=<?= $mhs['id']; ?>">hapus</a>
           </td>
           <td><?= $mhs['nama']; ?></td>
           <td><img src="Berkas/<?= $mhs['gambar']; ?>" alt="gambar" width="100px"></td>
       </tr>
       <?php endforeach; ?>
     </table>

     
     <table border="1" cellpadding="10" style="padding-top: 50px;">
       <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Gambar</th>
       </tr>
       <?php
            $id = 1;
            foreach($mahasiswa as $mhs) :
       ?>
       <tr>
           <td><?= $id; ?></td>
           <td>
               <a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a>
               <a href="hapus.php?id=<?= $mhs['id']; ?>">hapus</a>
           </td>
           <td><?= $mhs['nama']; ?></td>
           <td><img src="Berkas/<?= $mhs['gambar']; ?>" alt="gambar" width="100px"></td>
       </tr>
       <?php endforeach; ?>
     </table>
</body>
</html>