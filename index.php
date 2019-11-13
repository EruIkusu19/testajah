<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"> </script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> </script>


    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body>
    <h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
    <br />
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br />
    <br />
    <!-- Tambahkan Tableid -->
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Alamat</th>
                <th>OPSI</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>