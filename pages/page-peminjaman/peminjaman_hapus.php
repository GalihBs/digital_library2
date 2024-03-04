<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE PeminjamanID=$id");
?>
<script>
alert('Hapus Data Berhasil');
location.href = "index.php?page=pages/page-peminjaman/peminjaman";
</script>