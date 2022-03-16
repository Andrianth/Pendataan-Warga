<?php
// return print_r(md5("admin"));
session_start();

// jika sudah login, alihkan ke halaman dasbor
if (isset($_SESSION['user'])) {
    header('Location: ../dasbor/index.php');
        exit();
    }
?>

<?php include('../_partials/top-login.php') ?>

<div class="row" style="margin-top: 3em">
    <div class="col-md-4 col-md-offset-4">
        <div class="well" style="border-radius: 20px;">

            <form class="form-signin" method="post" action="../login/proses-login.php">
                <div class="text-center">
                    <img src="../../../assets/img/a.png" width="50%">
                </div>

                <h3 class="form-signin-heading text-center" style="margin: 2em 0em 2em 0em">
                  <strong>PENDATAAN WARGA</strong>
                </h3>
                
                <input type="text" name="username_user" class="form-control" placeholder="Nama User" autofocus required>

                <input type="password" name="password_user" class="form-control" placeholder="Kata Kunci" required>

                <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin: 1em 0em 1em 0em">
                    <i class="glyphicon glyphicon-log-in"></i>&nbsp&nbspMasuk
                </button>
            </form>
        </div>
    </div>
</div>

<?php include('../_partials/bottom-login.php') ?>
