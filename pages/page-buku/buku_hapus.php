<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE BukuId=$id");
?>
<script>
alert('Hapus Data Berhasil');
location.href = "index.php?page=pages/page-buku/buku";
</script>