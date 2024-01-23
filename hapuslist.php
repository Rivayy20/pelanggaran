<?php
include "koneksi.php";

$id_list = $_GET ['id_list'];

$hapus = mysqli_query($koneksi, "DELETE FROM list_pelanggaran WHERE id_list ='$id_list'");

if($hapus) {
    echo "<script>alert ('Data Berhasil Dihapus')</script>";
    header ("refresh:0;tabel_list.php");
}else{
    echo "<script>alert ('Data Tidak Berhasil Dihapus')</script>";
    header ("refresh:0;tabel_list.php");
}
?>
