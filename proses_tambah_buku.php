<?php
if($_POST){
    $nama_buku = $_POST['nama_buku'];
    $deskripsi = $_POST['deskripsi'];

    if(empty($nama_buku)){
        echo "<script>alert('nama buku tidak boleh kosong');location.href='tambah_kelas.php';</script>";
 
    } elseif(empty($deskripsi)){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_kelas.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into buku (nama_buku, deskripsi) value ('".$nama_buku."','".$deskripsi."')");
        
        if($insert){
            echo "<script>alert('Sukses menambahkan buku');location.href='tambah_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan buku');location.href='tambah_buku.php';</script>";
        }
    }
}
?>