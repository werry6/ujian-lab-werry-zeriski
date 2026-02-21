<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = ($_GET["id"]);
    $query = "SELECT * FROM produk WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query Error: " . mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
    if (!$data) {
        echo "<script>alert('Data tidak ditemukan');window.location='index.php';</script>";
    }
}
else {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <style type="text/css">
      * { font-family: "Trebuchet MS"; }
      .base { width: 400px; padding: 20px; margin: auto; background: #ededed; }
      label { margin-top: 10px; float: left; width: 100%; }
      input { padding: 6px; width: 100%; box-sizing: border-box; }
      button { background-color: salmon; color: #fff; padding: 10px; margin-top: 20px; border: 0; width: 100%; cursor: pointer; }
    </style>
</head>
<body>
    <center><h1>Edit Produk <?php echo $data['nama_produk']; ?></h1></center>
    <form method="POST" action="proses_edit.php" enctype="multipart/form-data">
      <section class="base">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
        <div><label>Nama Produk</label><input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" required /></div>
        <div><label>Deskripsi</label><input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" /></div>
        <div><label>Harga Beli</label><input type="number" name="harga_beli" value="<?php echo $data['harga_beli']; ?>" required /></div>
        <div><label>Harga Jual</label><input type="number" name="harga_jual" value="<?php echo $data['harga_jual']; ?>" required /></div>
        <div>
          <label>Gambar Produk</label>
          <img src="gambar/<?php echo $data['gambar_produk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar_produk" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar</i>
        </div>
        <div><button type="submit">Simpan Perubahan</button></div>
      </section>
    </form>
</body>
</html>