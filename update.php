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
            <h1>Update Data Kelas</h1>
        </div>
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Update Data Kelas</p>
                        </div>
                        <?php
                        include "../koneksi.php";
                        $IdKelas = $_GET['id_kelas'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas = $IdKelas");
                        $data = mysqli_fetch_array($query_mysql); { ?>
                        <form method="POST" action="action-update.php" class="needs-validation" novalidate="">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="IdKelas" class="form-label">ID Kelas</label>
                                    <input id="IdKelas" type="text" class="form-control" name="IdKelas" value="<?php echo $data['id_kelas']; ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="NamaKelas" class="form-label">Nama Kelas</label>
                                    <input type="text" class="form-control" id="NamaKelas" name="NamaKelas" value="<?php echo $data['nama_kelas']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="KompetensiKeahlian" class="form-label">Kompetensi Keahlian</label>
                                    <select class="form-control" aria-label="select" name="KompetensiKeahlian" id="KompetensiKeahlian">
                                        <option selected value="<?php echo $data['kompetensi_keahlian']; ?>">
                                            <?php echo $data['kompetensi_keahlian']; }?>
                                            <hr/>
                                        </option>
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>