<?php  
     require "function.php";
     $id = $_GET['id'];
     $mhs = query("SELECT * FROM document WHERE id = $id")[0];

     if(isset($_POST['submit'])) {
         $nama = $_POST['nama'];
         $gambar = $_FILES['gambar'];
   
         $file_name = $_FILES['gambar']['name'];
         $size = $_FILES['gambar']['size'];
         $error = $_FILES['gambar']['error'];
         $file_tmp = $_FILES['gambar']['file_tmp'];
      
       
       if($error === 0){
        move_uploaded_file($file_tmp, "Berkas/$gambar");
       }else{
            $gambar = $_POST['gambar'];

       }

        
     if(ubah([
        'nama' => $nama,
        'gambar' => $gambar
     ],$id) > 0){
        echo "
            <script>
                alert('Data berhasil diubah'); 
                document.location.href = 'index.php'; 
            </script>
            "; 
     }else{
        echo "
            <script>
                alert('Data berhasil diubah'); 
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
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
       <ul>
          <li>
            <label for="nama">Nama</label>
            <input type="text" name="nama" placeholder="nama">
          </li>
          <li>
             <label for="gambar">Gambar</label>
             <img src="Berkas/<?= $mhs['gambar'] ?>" width="100px">
             <input type="file" name="gambar" id="gambar">
          </li>
          <li>
            <button type="submit" name="submit">Submit</button>
          </li>
       </ul>
    </form>


  </body>
</html>