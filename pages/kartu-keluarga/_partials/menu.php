<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <?php if ($_SESSION['user']['status_user'] != 'RW'): ?>
                <div class="col-lg-2 col-md-6 col-sm-6" style="margin-top: 0.2em">
                    <a href="create.php" class="btn btn-success" style="width: 100%;">
                        <i class="glyphicon glyphicon-plus"></i>&nbsp&nbspTambah
                    </a>
                </div>
            <?php endif; ?>

            <div class="col-lg-2 col-md-6 col-sm-6" style="margin-top: 0.2em">
                <a href="index.php" class="btn btn-info" style="width: 100%;">
                    <i class="glyphicon glyphicon-eye-open"></i>&nbsp&nbspLihat Data
                </a>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6" style="margin-top: 0.2em">
                <a href="#" class="btn btn-warning" style="width: 100%;">
                    <i class="glyphicon glyphicon-refresh"></i>&nbsp&nbspRefresh
                </a>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6" style="margin-top: 0.2em">
                <a href="../kartu-keluarga/cetak-index.php" class="btn btn-primary" target="_blank" style="width: 100%;">
                    <i class="glyphicon glyphicon-print"></i>&nbsp&nbspCetak
                </a>
            </div>
        </div>
    </div>
</div>
<br>
