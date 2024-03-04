<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM ulasanbuku WHERE UlasanID=$id");
?>
<script>
alert('Hapus Data Berhasil');
location.href = "index.php?page=pages/page-ulasan/ulasan";
</script>