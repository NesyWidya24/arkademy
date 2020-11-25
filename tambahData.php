<!DOCTYPE html>
<html>
<head>
    <title>CRUD Arkademy</title>
</head>
<body>
    <a href="index.php">< Back</a>
    <br/>
    <br/>
    <h4> Tambah Data Produk</h3>
    <form method="post" action="tambah_aksi.php">
    <table>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="nama_produk"></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><input type="text" name="keterangan"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga"></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="number" name="jumlah"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit Data"></td>
        </tr>
    </table>
    </form>
</body>
</html>