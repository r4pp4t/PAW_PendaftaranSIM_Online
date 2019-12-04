
<div class="col-sm-12" style="background-color: #F8F9F9;padding-top: 4%;">
  <a class="btn btn-primary float-right" href="<?= base_url('login_admin/logout');?>"><i class="fa fa-sign-out-alt"></i> LOGOUT</a>
  <h3>FORM Tambah Data</h3>
</div>

<div class="container-fluid">    
  <div class="row content">
    <div class="col-sm-12">
      <div class="col-sm-10" style="background-color: #fff; margin-left: 10%; margin-top: 1%">
        <nav class="navbar" style="background-color:#EBF5FB ;margin-right: -1.4%;margin-left: -1.4%" ><h3>Tambah Data</h3></nav>
        <form action="<?php base_url('admin/creat') ?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
                <label for="name">Username</label>
                <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                 type="text" name="username" placeholder="username" />
                <div class="invalid-feedback">
                  <?php echo form_error('username') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                 type="text" name="password" min="0" placeholder="password" />
                <div class="invalid-feedback">
                  <?php echo form_error('password') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="level">Level</label>
                <textarea class="form-control <?php echo form_error('level') ? 'is-invalid':'' ?>"
                 name="level" placeholder="level"></textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('level') ?>
                </div>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save">
              <a href="<?= base_url('admin/index') ?>" class="btn btn-success"><i class="fa fa-undo"></i> kembali</a>
            </form>
      </div>
    </div>

  </div>
</div>



