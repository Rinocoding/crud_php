<?php 
 $conn = mysqli_connect("localhost","root","","phpdasar");

 function query($query){
   global $conn;
   $result = mysqli_query($conn,$query);
   $rows = [];
   while($row = mysqli_fetch_assoc($result)){
     $rows[] = $row;
   }
   return $rows;
 }

 function tambah($data){
    global $conn;
    $nama = $data['nama'];
    $gambar = $data['gambar'];
    $query = "INSERT INTO document(nama,gambar) VALUES('$nama','$gambar')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
  }


  function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM document WHERE id=$id");
    return mysqli_affected_rows($conn);
  }

  function cari($keyword){
    global $conn;
    $query = "SELECT * FROM document
            WHERE
            nama LIKE '%$keyword%'
            ";
            return query($query);
  }


  function ubah($data,$id){
    global $conn;
    $nama = $data['nama'];
    $gambar = $data['gambar'];
    $query = "UPDATE document SET
        nama = '$nama',
        gambar = '$gambar'
        WHERE id = $id
        
        ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
 }
?>