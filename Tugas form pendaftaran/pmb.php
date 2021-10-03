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
    <form method="POST" action="Konfirmasipmb.php">
        <table rules="rows">

        <div>Jalur Penerimaan Mahasiswa Baru</div>
       <select name="pilih">
       <option value="" selected="selected">Pilih jalur penerimaan</option>
       <option value="Jalur Reguler">Jalur Reguler</option>
       <option value="Jalur Bidikmisi">Jalur Bidikmisi</option>
       <option value="jalur Beasiswa Peringkat Rapot">Jalur Beasiswa Peringkat Rapot</option>
       <option value="Jalur Beasiswa Ujian">Jalur Beasiswa Ujian</option>
       <option value="Jalur Beasiswa Ujian Saringan Masuk">Jalur Beasiswa Ujian Saringan Masuk</option>
       <option value="Jalur Beasiswa Asak">Jalur Beasiswa Asak</option>
       <option value="Jalur Beasiswa Lulusan Terbaik Sekolah">Jalur Beasiswa Lulusan Terbaik Sekolah</option>
       <option value="Jalur Beasiswa Prestasi Akademik dan Non Akademik">Jalur Beasiswa Prestasi Akademik dan Non Akademik</option>
    </select>


            <tr>
                <td>Nama Calon Mahasiswa (Sesuai Ijazah SMA)*</td>
                <td><input type="text" name="nama" placeholder="Masukkan nama lengkap"></td>
            </tr>
            </p>
    <div>Tanggal Lahir</div>
    <select aria-label="Tanggal" name="tanggal">
     <option value="" selected="selected">--Tanggal--</option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="4">4</option>
     <option value="5">5</option>
     <option value="6">6</option>
     <option value="7">7</option>
     <option value="8">8</option>
     <option value="9">9</option>
     <option value="10">10</option>
     <option value="11">11</option>
     <option value="12">12</option>
     <option value="13">13</option>
     <option value="14">14</option>
     <option value="15">15</option>
     <option value="16">16</option>
     <option value="17">17</option>
     <option value="18">18</option>
     <option value="19">19</option>
     <option value="20">20</option>
     <option value="21">21</option>
     <option value="22">22</option>
     <option value="23">23</option>
     <option value="24">24</option>
     <option value="25">25</option>
     <option value="26">26</option>
     <option value="27">27</option>
     <option value="28">28</option>
     <option value="29">29</option>
     <option value="30">30</option>
    </select>
    <select aria-label="Bulan" name="bulan">
    <option value="" selected="selected">--Bulan--</option>
     <option value="1">Jan</option>
     <option value="2">Feb</option>
     <option value="3">Mar</option>
     <option value="4">Apr</option>
     <option value="5">Mei</option>
     <option value="6">Jun</option>
     <option value="7">Jul</option>
     <option value="8">Agu</option>
     <option value="9">Sep</option>
     <option value="10">Okt</option>
     <option value="11">Nov</option>
     <option value="12">Des</option>
    </select>
    <select aria-label="Tahun" name="tahun">
     <option value="" selected="selected">--Tahun--</option>
     <option value="2015">2015</option>
     <option value="2014">2014</option>
     <option value="2013">2013</option>
     <option value="2012">2012</option>
     <option value="2011">2011</option>
     <option value="2010">2010</option>
     <option value="2009">2009</option>
     <option value="2008">2008</option>
     <option value="2007">2007</option>
     <option value="2006">2006</option>
     <option value="2005">2005</option>
     <option value="2004">2004</option>
     <option value="2003">2003</option>
     <option value="2002">2002</option>
     <option value="2001">2001</option>
     <option value="2000">2000</option>
     <option value="1999">1999</option>
     <option value="1998">1998</option>
     <option value="1997">1997</option>
     <option value="1996">1996</option>
     <option value="1995">1995</option>
     <option value="1994">1994</option>
     <option value="1993">1993</option>
     <option value="1992">1992</option>
     <option value="1991">1991</option>
     <option value="1990">1990</option>
     <option value="1989">1989</option>
     <option value="1988">1988</option>
     <option value="1987">1987</option>
     <option value="1986">1986</option>
     <option value="1985">1985</option>
     <option value="1984">1984</option>
     <option value="1983">1983</option>
     <option value="1982">1982</option>
    </select>

    <tr>
                <td>Jenis Kelamin*</td>
                <td><select name="jeniskelamin" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select></td>

            <tr>
                <td>Agama*</td>
                <td><select name="agama" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                </select></td>

                <tr>
                <td>Status*</td>
                <td><select name="status" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Janda">Janda</option>
                    <option value="Duda">Duda</option>
                </select></td>

                <tr>
                <td>Alamat*</td>
                <td><input type="text" name="alamat" placeholder="Masukkan alamat lengkap"></td>
            </tr>
            <tr>
                <td>Kode Pos*</td>
                <td><input type="text" name="kodepos" placeholder="Masukkan kode pos"></td>
            </tr>

            <tr>
                <td>No Handphone*</td>
                <td><input type="text" name="nomerhp" placeholder="Masukkan no hp"></td>
            </tr>
            <tr>
                <td>Email*</td>
                <td><input type="text" name="email" placeholder="Masukkan email"></td>
            </tr>

        </table>
        <h2>DATA SEKOLAH ASAL CALON MAHASISWA</h2>
        <table rules="rows">
            <tr>
                <td>Asal Sekolah*</td>
                <td><input type="text" name="asalsekolah" placeholder="Masukkan asal sekolah"></td>
            </tr>
            <tr>
                <td>Tahun Lulus*</td>
                <td><input type="text" name="tahunlulus" placeholder="Masukkan tahun lulus"></td>
            </tr>
        </table>
        <h2>DATA ORANG TUA MAHASISWA BARU</h2>
        <table rules="rows">
            <tr>
                <td>Nama Ayah*</td>
                <td><input type="text" name="ayah" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>Nama Ibu*</td>
                <td><input type="text" name="ibu" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>Alamat*</td>
                <td><input type="text" name="alamatortu" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>Kode Pos*</td>
                <td><input type="text" name="kodeposortu" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>No Handphone*</td>
                <td><input type="text" name="nomorhportu" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ayah*</td>
                <td><select name="PendidikanTerakhirAyah" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                    <option value="Tamat SD">Tamat SD</option>
                    <option value="Tamat SMP">Tamat SMP</option>
                    <option value="Tamat SMA">Tamat SMA</option>
                    <option value="Diploma (D1 - D2)">Diploma (D1 - D2)</option>
                    <option value="Sarjana (D3)">Sarjana (D3)</option>
                    <option value="Sarjana (D4 - S1)">Sarjana (D4 - S1)</option>
                    <option value="Pascasarjana (S2)">Pascasarjana (S2)</option>
                    <option value="Doktor (S3)">Doktor (S3)</option>
                </select></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir Ibu*</td>
                <td><select name="PendidikanTerakhirIbu" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Tidak Tamat SD">Tidak Tamat SD</option>
                    <option value="Tamat SD">Tamat SD</option>
                    <option value="Tamat SMP">Tamat SMP</option>
                    <option value="Tamat SMA">Tamat SMA</option>
                    <option value="Diploma (D1 - D2)">Diploma (D1 - D2)</option>
                    <option value="Sarjana (D3)">Sarjana (D3)</option>
                    <option value="Sarjana (D4 - S1)">Sarjana (D4 - S1)</option>
                    <option value="Pascasarjana (S2)">Pascasarjana (S2)</option>
                    <option value="Doktor (S3)">Doktor (S3)</option>
                </select></td>
            </tr>
            <tr>
                <td>Status Ayah*</td>
                <td><select name="statusayah" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Meninggal">Meninggal</option>
                </select></td>
            </tr>
            <tr>
                <td>Status Ibu*</td>
                <td><select name="statusibu" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Meninggal">Meninggal</option>
                </select></td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah*</td>
                <td><input type="text" name="pekerjaayah" placeholder="Masukkan nama lengkap"></td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu*</td>
                <td><input type="text" name="pekerjaibu" placeholder="Masukkan nama lengkap"></td>
            </tr>
        </table>
        <h2>PEMINATAN PROGRAM STUDI</h2>
        <table rules="rows">
            <tr>
                <td>Pilihan Program Studi 1</td>
                <td><select name="prodi1" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Psikologi">Psikologi</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Desain Produk Industri">Desain Produk Industri</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Arsitektur">Arsitektur</option>
                </select></td>
            </tr>
            <tr>
                <td>Pilihan Program Studi 2</td>
                <td><select name="prodi2" id="">
                    <option class="hidden"  value="" selected disabled>Pilih salah satu</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Psikologi">Psikologi</option>
                    <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                    <option value="Desain Produk Industri">Desain Produk Industri</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Arsitektur">Arsitektur</option>
                </select></td>
                
            </tr>
            <td>Sumber Informasi</td>
            <td><select name="sumber" id="">
            <tr>
            
                <td><input type="radio" name="sumber" value="Internet">Internet
                <br>
                <input type="radio" name="sumber" value="Majalah">Majalah
                <br>
                <input type="radio" name="sumber" value="Brosur">Brosur
                <br>
                <input type="radio" name="sumber" value="Radio">Radio
                <br>
                <input type="radio" name="sumber" value="Spanduk">Spanduk
                <br>
                <input type="radio" name="sumber" value="Orang Tua">Orang Tua
                <br>
                <input type="radio" name="sumber" value="Teman">Teman
                <br>
                <input type="radio" name="sumber" value="Pameran">Pameran
                <br>
                <input type="radio" name="sumber" value="Pihak Sekolah">Pihak Sekolah
                <br>
                <input type="radio" name="sumber" value="Lainnya....">Lainnya....</td>
            </tr>
        </table>
        <h2>UJIAN MASUK</h2>
        <table rules="rows">
        <td>Pilihan Gelombang</td>
        <td><select name="gelombang" id="">
            <tr>
                <td><input type="radio" name="gelombang" value="Gelombang 1">Gelombang 1
                <br>
                <input type="radio" name="gelombang" value="Gelombang 2">Gelombang 2
                <br>
                <input type="radio" name="gelombang" value="Gelombang 3">Gelombang 3
                <br>
                <input type="radio" name="gelombang" value="Gelombang 4">Gelombang 4</td>
            </tr>
            <tr>
                <td><button type="submit" name="submit" value="submit">Submit</td>
            </tr>
        </table>
    </form>
    
</body>
</html>