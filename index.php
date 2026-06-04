<?php
require_once 'db_conection.php';
require_once 'mahasiswa.php';
require_once 'matkul.php';
require_once 'dosen.php';
require_once 'perkuliahan.php';

$mhs = new Mahasiswa();
$mtkl = new Matkul();
$dosen = new Dosen();
$perkuliahan = new Perkuliahan();
$data1 = $mhs->getData();
$data2 = $mtkl->getData();
$data3 = $dosen->getData();
$data4 = $perkuliahan->getData();
?>

<h2 class="text-center mt-3">Tabel Mahasiswa</h2>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-3">

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Angkatan</th>
            <th>Alamat</th>
            <th>Email</th>  
        </tr>
    </thead>

    <tbody>
    <?php foreach ($data1 as $row) { ?>
        <tr>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['nama_mhs']; ?></td>
            <td><?= $row['angkatan']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['email']; ?></td>
        </tr>
    <?php } ?>
    </tbody>

</table>

<br>
<br>
<h2 class="text-center mt-3">Tabel Matakuliah</h2>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-3">

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Semester</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($data2 as $row) { ?>
        <tr>
            <td><?= $row['kode_matkul']; ?></td>
            <td><?= $row['nama_matkul']; ?></td>
            <td><?= $row['sks']; ?></td>
            <td><?= $row['semester']; ?></td>
        </tr>
    <?php } ?>
    </tbody>

</table>

</div>
<br>
<br>
<h2 class="text-center mt-3">Tabel Dosen</h2>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-3">

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Kode Dosen</th>
            <th>Nama Dosen</th>
            <th>Email</th>
            <th>Jabatan Fungsional</th>
            <th>No. Telepon</th>
            <th>Program Studi</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($data3 as $row) { ?>
        <tr>
            <td><?= $row['nidn']; ?></td>
            <td><?= $row['nama_dosen']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['jabatan_fungsional']; ?></td>
            <td><?= $row['no_telp']; ?></td>
            <td><?= $row['prodi']; ?></td>
        </tr>
    <?php } ?>
    </tbody>

</table>

</div>
<br>
<br>
<h2 class="text-center mt-3">Tabel Perkuliahan</h2>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-3">

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Kode Perkuliahan</th>
            <th>Kode Dosen</th>
            <th>Kode Matakuliah</th>
            <th>Semester</th>
            <th>Nilai</th>
            <th>Tahun Akademik</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($data4 as $row) { ?>
        <tr>
            <td><?= $row['id_perkuliahan']; ?></td>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['kode_matkul']; ?></td>
            <td><?= $row['nidn']; ?></td>
            <td><?= $row['semester']; ?></td>
            <td><?= $row['nilai']; ?></td>
            <td><?= $row['tahun_akademik']; ?></td>
        </tr>
    <?php } ?>
    </tbody>

</table>

</div>