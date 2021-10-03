<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>PENDAFTARAN CALON MAHASISWA BARU</h2>
    <table border="1">
    <tr>
            <td>Jalur Penerimaan Mahasiswa Baru</td>
            <td><?php echo $_POST['pilih']; ?></td>
        </tr>
        <tr>
            <td>Nama Calon Mahasiswa*:</td>
            <td><?php echo $_POST['nama']; ?></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><?php echo $_POST['tanggal']; ?></td>
        </tr>
        <tr>
            <td>Bulan</td>
            <td><?php echo $_POST['bulan']; ?></td>
            
        </tr>

        <tr>
            <td>Tahun</td>
            <td><?php echo $_POST['tahun']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin*:</td>
            <td><?php echo $_POST['jeniskelamin']; ?></td>
        </tr>
        <tr>
            <td>Agama*:</td>
            <td><?php echo $_POST['agama']; ?></td>
        </tr>
        <tr>
            <td>Status*:</td>
            <td><?php echo $_POST['status']; ?></td>
        </tr>
        <tr>
            <td>Alamat*:</td>
            <td><?php echo $_POST['alamat']; ?></td>
        </tr>
        <tr>
            <td>Kode Pos*:</td>
            <td><?php echo $_POST['kodepos']; ?></td>
        </tr>
        <tr>
            <td>No Handphone*:</td>
            <td><?php echo $_POST['nomerhp']; ?></td>
        </tr>
        <tr>
            <td>Email*:</td>
            <td><?php echo $_POST['email']; ?></td>
        </tr>
    </table>
    <h2>DATA SEKOLAH ASAL CALON MAHASISWA</h2>
    <table border="1">
        <tr>
            <td>Asal Sekolah*:</td>
            <td><?php echo $_POST['asalsekolah']; ?></td>
        </tr>
        <tr>
            <td>Tahun Lulus*:</td>
            <td><?php echo $_POST['tahunlulus']; ?></td>
        </tr>
    </table>
    <h2>DATA ORANG TUA MAHASISWA BARU</h2>
    <table border="1">
        <tr>
            <td>Nama Ayah*:</td>
            <td><?php echo $_POST['ayah']; ?></td>
        </tr>
        <tr>
            <td>Nama Ibu*:</td>
            <td><?php echo $_POST['ibu']; ?></td>
        </tr>
        <tr>
            <td>Alamat*:</td>
            <td><?php echo $_POST['alamatortu']; ?></td>
        </tr>
        <tr>
            <td>Kode Pos*:</td>
            <td><?php echo $_POST['kodeposortu']; ?></td>
        </tr>
        <tr>
            <td>No Handphone*:</td>
            <td><?php echo $_POST['nomorhportu']; ?></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir Ayah*:</td>
            <td><?php echo $_POST['PendidikanTerakhirAyah']; ?></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir Ibu*:</td>
            <td><?php echo $_POST['PendidikanTerakhirIbu']; ?></td>
        </tr>
        <tr>
            <td>Status Ayah*:</td>
            <td><?php echo $_POST['statusayah']; ?></td>
        </tr>
        <tr>
            <td>Status Ibu*:</td>
            <td><?php echo $_POST['statusibu']; ?></td>
        </tr>
        <tr>
            <td>Pekerjaan Ayah*:</td>
            <td><?php echo $_POST['pekerjaayah']; ?></td>
        </tr>
        <tr>
            <td>Pekerjaan Ibu*:</td>
            <td><?php echo $_POST['pekerjaibu']; ?></td>
        </tr>
    </table>
    <h2>PEMINATAN PROGRAM STUDI</h2>
    <table border="1">
        <tr>
            <td>Pilihan Program Studi 1</td>
            <td><?php echo $_POST['prodi1']; ?></td>
        </tr>
        <tr>
            <td>Pilihan Program Studi 2</td>
            <td><?php echo $_POST['prodi2']; ?></td>
        </tr>
        <tr>
            <td>Sumber Informasi</td>
            <td><?php echo $_POST['sumber']; ?></td>
        </tr>
    </table>
    <h2>UJIAN MASUK</h2>
    <table border="1">
        <tr>
            <td>Pilihan Gelombang</td>
            <td><?php echo $_POST['gelombang']; ?></td>
        </tr>
    </table>
</body>
</html>