<?php include('../_partials/top.php') ?>

<h2 class="page-header">Data User</h2>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable" style="text-align: center;">
  <thead>
    <tr>
      <th>#</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Keterangan</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_user as $user) : ?>
    <tr>
      <td><?php echo $nomor ?>.</td>
      <td><?php echo $user['nama_user'] ?></td>
      <td><?php echo $user['username_user'] ?></td>
      <td><?php echo $user['keterangan_user'] ?></td>
      <td><?php echo $user['status_user'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group">
          <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="glyphicon glyphicon-cog"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php?id_user=<?php echo $user['id_user'] ?>"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="edit.php?id_user=<?php echo $user['id_user'] ?>"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="delete.php?id_user=<?php echo $user['id_user'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                <i class="glyphicon glyphicon-trash"></i> Hapus
              </a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
    <?php $nomor++; ?>
    <?php endforeach ?>
  </tbody>
</table>

<?php include('../_partials/bottom.php') ?>
