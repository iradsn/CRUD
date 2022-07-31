<?php include 'koneksi.php' ?>
<?php
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
    $sql = "SELECT * FROM identitas WHERE nama='$nama'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $alamat = $data['alamat'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas</title>
    <center>
        <h1>Ubah Identitas</h1>
    </center>
</head>

<body>
    <form method="POST">
        <center>
            <table border="2">
        </center>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" class="form-control" value="<?= $nama; ?>"> </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir" class="form-control" value="<?= $tanggal_lahir; ?>"> </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><select name="jenis_kelamin" id="" class="" value="<?= $jenis_kelamin; ?>">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" class="form-control" value="<?= $alamat; ?>"> </td>
        </tr>
    </form>
    <button name="ubah" class="btn btn-success">Ubah</button>
</body>

</html>

<?php
if (isset($_POST['ubah'])) {
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    include 'koneksi.php';


    $sql = "UPDATE identitas SET tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE nama='$nama'";
    $query = mysqli_query($koneksi, $sql);
    header("location:index.php");
}
?>