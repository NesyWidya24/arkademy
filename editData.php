<!DOCTYPE html>
<html>
<head>
    <title>CRUD Arkademy</title>
</head>
<body>
    <a href="index.php">< Back</a>
    <br/>
    <br/>
    <h4> Edit Data Produk</h3>

    <?php
    include 'koneksi.php';
        
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from produk where id='$id'");
        while($d = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="update_aksi.php">
    <table>
        <tr>
            <td>Nama Produk</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id'];?>">
                <input type="text" name="nama_produk" value="<?php echo $d['nama_produk'];?>">
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>
                <input type="text" name="keterangan" value="<?php echo $d['keterangan'];?>">
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>    
                <input type="text" name="harga" value="<?php echo $d['harga'];?>">
            </td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>    
                <input type="number" name="jumlah" value="<?php echo $d['jumlah'];?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Update Data"></td>
        </tr>
    </table>
    </form>
    <?php
    }
    ?>
</body>
</html>