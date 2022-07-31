<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas</title>
    <center>
        <h1>Data Identitas</h1>
    </center>
</head>

<body>
    <center>
        <table border="2">
    </center>
    <tr>
        <td>No.</td>
        <td>Nama</td>
        <td>Tanggal Lahir</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td>Action</td>
    </tr>
    <?php
    $no = 1;
    $tampil = "SELECT * FROM identitas";
    $query = mysqli_query($koneksi, $tampil);
    while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
        $nama = $data['nama'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $alamat = $data['alamat'];
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $tanggal_lahir; ?></td>
            <td><?php echo $jenis_kelamin; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><a href="edit.php?nama=<?php echo $nama; ?>">Edit</a>
                <a href="index.php?nama=<?php echo $data['nama']; ?>">Hapus</a>
            </td>

        </tr>

    <?php } ?>
    </table>
    <a href="tambah.php">Tambah Data</a>
</body>

</html>

<?php
if (isset($_GET['nama'])) {
    $sql_hapus = "DELETE FROM identitas WHERE nama='" . $_GET['nama'] . "'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);
    header("location:index.php");
}
?>