<?php
if(isset($_POST['tambah'])){
    include('koneksi.php');

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_tel = $_POST['no_tel'];

<<<<<<< HEAD
    $input = mysqli_query($koneksi, "INSERT INTO [dbo].[mhs] VALUES(NULL, '$nama', '$email', '$no_tel') ") or die ("Koneksi Gagal");
=======
    $input = mysqli_query($koneksi, "INSERT INTO mhs VALUES(NULL, '$nama', '$email', '$no_tel') ") or die ("Koneksi Gagal");
>>>>>>> ca111239986fa04aa5ea5799ae1286fb179fdd46

    if($input){
        echo 'Data Berhasil ditambahkan';
        echo '<a href="tambah.php">Kembali</a>';
    }else{
        echo 'Gagal menambah data';
        echo '<a href="tambah.php">Kembali</a>';
    }
}else{
    echo'<script>window.history.back()</script>';
}
?>