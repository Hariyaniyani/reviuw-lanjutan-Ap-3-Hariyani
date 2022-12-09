<html>
    <head>
        <title>ARYAN/KUNYIT - TOKO</title>
    </head>
    <body>
        <h2>MODULE BARANG</h2>
        <br/>
        <a href="tambah_barang.php">+ TAMBAH BARANG</a>
        <br/>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>QTY</th>
                <th>Kategori</th>
                <th>Opsi</th>
            </tr>
            <?php
                include 'koneksi.php';
                $no = 1;
                $query = mysqli_query($koneksi,"SELECT * FROM barang");
                while($data = mysqli_fetch_array($query))
                {
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['kode_barang']; ?></td>
                <td><?php echo $data['qty']; ?></td>
                <td><?php echo $data['kategori_id']; ?></td>
                <td>
                    <a href="edit_user.php?id=<?php echo $data['id']; ?>">EDIT</a>
                    <a href="hapus_user.php?id=<?php echo $data['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
                }
            ?>
    </table>
</body>
</html>