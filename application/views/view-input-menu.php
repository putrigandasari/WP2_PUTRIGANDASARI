<html>
<head>
    <title>Form Input Data Menu</title>
</head>

<body>
    <center>
        <form action="<?= base_url('menu/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Menu
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode Menu</th>
                    <th> : </th>
                    <td>
                        <input type="text" name="kode" id="kode" placeholder="Required">
                        <div class="col-sm-6 col-danger"> <?= form_error('kode') ?> </div>
                    </td>
                </tr>
                <tr>
                    <th>Nama Menu</th>
                    <td> : </td>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Required">
                        <div class="col-sm-6 col-danger"> <?= form_error('nama') ?> </div>
                    </td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td> : </td>
                    <td>
                        <input type="text" name="harga" id="harga" placeholder="Required">
                        <div class="col-sm-6 col-danger"> <?= form_error('harga') ?> </div>
                    </td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td> : </td>
                    <td>
                        <input type="file" name="gambar" id="gambar">
                        <div class="col-sm-6 col-danger"> <?= form_error('gambar') ?> </div>
                    </td>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
