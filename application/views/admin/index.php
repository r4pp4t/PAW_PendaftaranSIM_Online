<div class="col-sm-12" style="background-color: #F8F9F9;padding-top: 4%;">
  <a class="btn btn-primary float-right" href="<?= base_url('login_admin/logout');?>"><i class="fa fa-sign-out-alt"></i> LOGOUT</a>
  <h3>SELAMAT DATANG ADMIN</h3>
</div>
  
<div class="container-fluid">    
  <div class="row content">
    <div class="col-sm-12">
      <div class="col-sm-10" style="background-color: #fff; margin-left: 10%; margin-top: 1%">
        <nav class="navbar" style="background-color:#EBF5FB ;margin-right: -1.4%;margin-left: -1.4%" ><h3 style="margin-left: 15%">Informasi DATABASE Kepolisian</h3>
        <a href="<?= base_url('admin/creat') ?>"class="btn btn-primary float-right">Tambah Data</a></nav>
        <div class="table-responsive">
              <table class="table table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th class="text-center">Userame</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Level</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($admin as $admin): ?>
                  <tr>
                    <td width="150">
                      <?php echo $admin->username ?>
                    </td>
                    <td>
                      <?php echo $admin->password ?>
                    </td>
                    <td>
                      <?php echo $admin->level ?><i class="fas fa-user"></i>
                    </td>
                    <td width="250">
                      <a href="<?php echo site_url('admin/edit/'.$admin->id) ?>"
                       class="btn btn-primary"><i class="fa fa-user"></i> Edit</a>
                      <a onclick="deleteConfirm('<?php echo site_url('admin/delete/'.$admin->id) ?>')"
                       href="#!" class="btn btn-secondary"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
      </div>
    </div>

  </div>
</div>
<?php $this->load->view("admin/_partials/modal.php") ?>
<script>
function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#deleteModal').modal();
}
</script>


