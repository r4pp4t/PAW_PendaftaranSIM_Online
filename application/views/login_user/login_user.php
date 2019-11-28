<body>
  <div class="container" style="margin-top: 1%">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <img style="width: 60%;margin-left: 20%" src="<?= base_url('assets/')?>img/user.jpg" >
            <?= $this->session->flashdata('message');?>
            <form class="form-signin" method="post" action="<?= base_url('login_user/index');?>">
              <div class="form-label-group">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control" placeholder="Username" name="username">
                <small class="text-danger"><?= form_error('username');?></small>
              </div>
              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
                <small class="text-danger"><?= form_error('password');?></small>
              </div>
              <br><button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Log in</button>
            </form>
            <br><a class="btn btn-lg btn-primary btn-block text-uppercase" href="<?= base_url('auth/registrasi')?>">Registrasi</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>