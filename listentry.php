<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop 2 - Membuat Buku Tamu</title>
</head>

<body>
    <h2>Daftar Komentar dalam Buku Tamu</h2>

    <?php
    require("connectdb.php");

    $sql = "SELECT tanggal, nama, email, url, komentar " . "FROM bukutamu ORDER BY tanggal desc";

    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
    ?>
    <table>
        <tr bgColor="#ddcc45">
            <th width="80">Tanggal</th>
            <th width="140">Nama</th>
            <th width="200">Email</th>
            <th width="200">URL</th>
            <th width="250">Komentar</th>
        </tr>
        <?php
            while (list($tanggal, $nama, $email, $url, $komentar) =
                mysqli_fetch_array($result)
            ) {
            ?>
        <tr>
            <td vAlign="top"><?php echo $tanggal; ?></td>
            <td vAlign="top"><?php echo $nama; ?></td>
            <td vAlign="top"><?php echo $email; ?></td>
            <td vAlign="top">
                <a href="<?php echo $url; ?>">
                    <?php echo $url; ?>
                </a>
            </td>
            <td vAlign="top"><?php echo $komentar; ?></td>
        </tr>
        <?php
            }
            ?>
    </table>
    <?php
    } else {
    ?>
    <i>Belum ada komentar.</i>
    <?php
    }
    ?>
    <br /><br />
    <div align="center">
        [<a href="addentry.php">Isi Buku Tamu</a>]
    </div>

</body>

</html>