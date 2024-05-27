<?php
    session_start();
    if($_SESSION['level']==""){
        header("location:auth-login-petugas.php?pesan=gagal");
    }
?>

<?php require('../template/header.php'); ?>

<?php require('../template/navbar.php'); ?>

<?php require('../template/sidebar.php'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Kelas</h1>
        </div>
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Tambah Data Kelas</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="action-create.php" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="IdKelas">ID Kelas</label>
                                    <input id="IdKelas" type="text" class="form-control" name="IdKelas" tabindex="1" required autofocus>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">   
                                        <label for="NamaKelas" class="control-label">Nama Kelas</label>
                                    </div>
                                    <input id="NamaKelas" type="text" class="form-control" name="NamaKelas" tabindex="2" required>
                                </div>
                                <div class="form-group">
                                <label for="KompetensiKeahlian" class="form-label">Kompetensi Keahlian</label>
                                        <select class="form-control" aria-label="select" name="KompetensiKeahlian" id="KompetensiKeahlian">
                                            <option value="Pilih">Pilih Kompetensi Keahlian</option>
                                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                            <option value="Teknik Audio Video">Teknik Audio Video</option>
                                            <option value="Desain dan Pemodelan Informasi Bangunan">Desain dan Pemodelan Informasi Bangunan</option>
                                            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                                            <option value="Teknik dan Bisnis Sepeda Motor">Teknik dan Bisnis Sepeda Motor</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>