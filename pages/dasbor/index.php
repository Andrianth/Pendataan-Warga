<?php include('../_partials/top.php') ?>

<h3 class="page-header"><strong>Selamat Datang, <?php echo $_SESSION['user']['nama_user'] ?></strong></h3>

<?php include('data-index.php') ?>

<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="panel panel-primary">
            <div class="panel-body" style="height: 13em;">
                <h3><strong>Data Warga</strong></h3>
                <p>
                  Total ada <?php echo $jumlah_warga['total'] ?> data warga. <?php echo $jumlah_warga_l['total'] ?> di antaranya laki-laki, dan <?php echo $jumlah_warga_p['total'] ?> diantaranya perempuan.
                </p>
                <p>
                   Warga di atas 17 tahun berjumlah <?php echo $jumlah_warga_ld_17['total'] ?> orang, dan di bawah 17 tahun berjumlah <?php echo $jumlah_warga_kd_17['total'] ?> orang.
                </p>
            </div>
            
            <div class="panel-footer">
                <a href="../warga" class="btn btn-info" role="button" style="width: 60%">
                  <span class="glyphicon glyphicon-book"></span>&nbsp&nbspLihat Detail Warga »
                </a>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4">
        <div class="panel panel-primary">
            <div class="panel-body" style="height: 13em;">
                <h3><strong>Data Kartu Keluarga</strong></h3>
                <p>Total ada <?php echo $jumlah_kartu_keluarga['total'] ?> data kartu keluarga</p>
            </div>
            
            <div class="panel-footer">
                <a href="../kartu-keluarga" class="btn btn-info" role="button" style="width: 60%">
                    <span class="glyphicon glyphicon-inbox"></span>&nbsp&nbspLihat Detail KK »
                </a>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-md-4">
        <div class="panel panel-primary">
            <div class="panel-body" style="height: 13em;">
                <h3><strong>Data Mutasi</strong></h3>
                <p>
                  Total ada <?php echo $jumlah_mutasi['total'] ?> data mutasi. <?php echo $jumlah_mutasi_l['total'] ?> di antaranya laki-laki, dan <?php echo $jumlah_mutasi_p['total'] ?> diantaranya perempuan.
                </p>
                <p>
                   Warga di atas 17 tahun berjumlah <?php echo $jumlah_mutasi_ld_17['total'] ?> orang, dan di bawah 17 tahun berjumlah <?php echo $jumlah_mutasi_kd_17['total'] ?> orang.
                </p>
            </div>
            
            <div class="panel-footer">
                <a href="../mutasi" class="btn btn-info" role="button" style="width: 60%">
                    <span class="glyphicon glyphicon-export"></span>&nbsp&nbspLihat Detail Mutasi »
                </a>
            </div>
        </div>
    </div>
</div>

<?php include('../_partials/bottom.php') ?>
