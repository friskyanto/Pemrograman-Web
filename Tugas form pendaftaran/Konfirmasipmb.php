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
    <tr>
        <br>
            <td>Jalur Penerimaan Mahasiswa Baru</td>
            <td><?php echo $_POST['pilih']; ?></td>
        </tr>
        <br>
        <tr>
            <td>Nama Calon Mahasiswa*:</td>
            <td><?php echo $_POST['nama']; ?></td>
        </tr>
        
        <tr>
        <br>
            <td>Tanggal</td>
            <td><?php echo $_POST['tanggal']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Bulan</td>
            <td><?php echo $_POST['bulan']; ?></td>
            
        </tr>

        <tr>
        <br>
            <td>Tahun</td>
            <td><?php echo $_POST['tahun']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Jenis Kelamin*:</td>
            <td><?php echo $_POST['jeniskelamin']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Agama*:</td>
            <td><?php echo $_POST['agama']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Status*:</td>
            <td><?php echo $_POST['status']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Alamat*:</td>
            <td><?php echo $_POST['alamat']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Kode Pos*:</td>
            <td><?php echo $_POST['kodepos']; ?></td>
        </tr>
        <tr>
        <br>
            <td>No Handphone*:</td>
            <td><?php echo $_POST['nomerhp']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Email*:</td>
            <td><?php echo $_POST['email']; ?></td>
        </tr>
    </table>
    <h2>DATA SEKOLAH ASAL CALON MAHASISWA</h2>
    
        <tr>
        <br>
            <td>Asal Sekolah*:</td>
            <td><?php echo $_POST['asalsekolah']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Tahun Lulus*:</td>
            <td><?php echo $_POST['tahunlulus']; ?></td>
        </tr>
    </table>
    <h2>DATA ORANG TUA MAHASISWA BARU</h2>
   
        <tr>
        <br>
            <td>Nama Ayah*:</td>
            <td><?php echo $_POST['ayah']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Nama Ibu*:</td>
            <td><?php echo $_POST['ibu']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Alamat*:</td>
            <td><?php echo $_POST['alamatortu']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Kode Pos*:</td>
            <td><?php echo $_POST['kodeposortu']; ?></td>
        </tr>
        <tr>
        <br>
            <td>No Handphone*:</td>
            <td><?php echo $_POST['nomorhportu']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Pendidikan Terakhir Ayah*:</td>
            <td><?php echo $_POST['PendidikanTerakhirAyah']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Pendidikan Terakhir Ibu*:</td>
            <td><?php echo $_POST['PendidikanTerakhirIbu']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Status Ayah*:</td>
            <td><?php echo $_POST['statusayah']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Status Ibu*:</td>
            <td><?php echo $_POST['statusibu']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Pekerjaan Ayah*:</td>
            <td><?php echo $_POST['pekerjaayah']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Pekerjaan Ibu*:</td>
            <td><?php echo $_POST['pekerjaibu']; ?></td>
        </tr>
    </table>
    <h2>PEMINATAN PROGRAM STUDI</h2>
    
        <tr>
        <br>    
            <td>Pilihan Program Studi 1</td>
            <td><?php echo $_POST['prodi1']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Pilihan Program Studi 2</td>
            <td><?php echo $_POST['prodi2']; ?></td>
        </tr>
        <tr>
        <br>
            <td>Sumber Informasi</td>
            <td><?php echo $_POST['sumber']; ?></td>
        </tr>
    </table>
    <h2>UJIAN MASUK</h2>
        <tr>
        <br>
            <td>Pilihan Gelombang</td>
            <td><?php echo $_POST['gelombang']; ?></td>
        </tr>
    </table>
</body>
</html>