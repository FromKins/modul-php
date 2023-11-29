<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop 2 - Membuat Buku Tamu</title>
</head>

<body>
    <h2>Form Pencatatan Buku Tamu</h2>
    Silahkan masukkan komentar Anda untuk website kami.
    <br /><br />
    <form action="do_addentry.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="textfield" name="nama" maxlength="25" size="50"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="textfield" name="email" maxlength="50" size="50"></td>
            </tr>
            <tr>
                <td>URL</td>
                <td><input type="textfield" name="url" maxlength="100" size="50"></td>
            </tr>
            <tr>
                <td valign="top">Komentar</td>
                <td><textarea name="komentar" id="" cols="50" rows="6"></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="kirim" id="" value="Kirim"></td>
            </tr>
        </table>
    </form>
</body>

</html>