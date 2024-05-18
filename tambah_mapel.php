<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>MAPEL TAMBAHAN</h2>
        <br/>
        <a href="index.php">KEMBALI KE BERANDA</a>
        <br/>
        <br/>
        <h3>TAMBAH DATA MAPEL</h3>
        <form method="post" action="proses_tambah_mapel.php">
            <table>
                <tr>
                    <td>Id Mapel</td>
                    <td><input type="number" name="id"></td>
                </tr>
                <tr>
                    <td>Nama Mapel</td>
                    <td><input type="text" name="mapel"></td>
                </tr>
                <tr>
                    <td>Pengampu</td>
                    <td><input type="text" name="pengampu"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </form>
    </body>
</html>