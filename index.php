<!DOCTYPE html>
<html>
<head>
    <title>CRUD Arkademy</title>
</head>
<body>
    <a href="tambahData.php">+ Tambah Data Produk</a>
    <br/>
    <br/>
    <table border = "1">
        <tr>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "select * from produk");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['nama_produk']; ?></td>
                <td><?php echo $d['keterangan']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td>
                    <a href="editData.php?id=<?php echo $d['id']; ?>">Edit</a>
                    <a href="hapusData.php?id=<?php echo $d['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>