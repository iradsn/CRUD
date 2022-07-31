<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <center>
        <h1>Tambah Identitas</h1>
    </center>
</head>

<body>
    <center>
        <form method="POST" action="tambah.php">
            <table width="400px">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <td>Jenis Kelamin</td>
                <td><select name="jenis_kelamin" id="" class="" value="<?= $jenis_kelamin; ?>">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>


            </table>

            <button name="simpan">SIMPAN</button>
        </form>

    </center>

</body>

</html>
<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO identitas (nama,tanggal_lahir,jenis_kelamin,alamat) VALUES ('$nama','$tanggal_lahir','$jenis_kelamin','$alamat')";
    $query = mysqli_query($koneksi, $sql);
    header("location:index.php");
}

?>