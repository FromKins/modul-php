<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop 2 - Membuat Buku Tamu</title>
</head>

<body>
    <?php
    if (isset($_POST["kirim"])) {
        $nama     = $_POST["nama"];
        $email    = $_POST["email"];
        $url      = $_POST["url"];
        $komentar = $_POST["komentar"];

        require("connectdb.php");

        date_default_timezone_set("Asia/Jakarta");
        $tanggal = date("Y/m/d"); //Contoh 2010/01/12

        $sql = "INSERT INTO bukutamu(tanggal, nama, email, " . "url, komentar) " . " VALUES ('$tanggal','$nama', '$email', '$url', " . " '$komentar')";

        mysqli_query($conn, $sql);
        $num = mysqli_affected_rows($conn);

        if ($num > 0) {
    ?>
    <h2>Terima Kasih</h2>
    <strong><?php echo $nama; ?></strong>
    komentar Anda telah terkirim ke server kami.<br />
    [<a href="listentry.php">Lihat Daftar Komentar </a>]
    <br /><br />
    <?php
        } else {
        ?>
    <h2>Error</h2>
    Proses Pencatatan bukutamu gagal. Silahkan ulangi!
    <br />
    [<a href="addentry.php">
        Kembali ke Form Pencatatan Buku Tamu</a>]
    <?php
        }
    }
    ?>
</body>

</html>