<body>
  <div class="container" style="margin-bottom: -1.55%">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <img style="width: 80%;margin-left: 10%" src="<?= base_url('assets/')?>img/regis.jpg" >
            <form class="form-signin" method="post" action="<?= base_url('auth/registrasi');?>">
              <div class="form-label-group">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control" placeholder="Username"  name="username" value="<?= set_value('username');?>">
                <small class="text-danger"><?= form_error('username');?></small>
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
                <small class="text-danger"><?= form_error('password');?></small>
                <label for="inputPassword">Re-Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="Re-password">
                <small class="text-danger"><?= form_error('Re-password');?></small>
                <br>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Creat New Account</button>
            </form>
            <br><a class="btn btn-lg btn-primary btn-block text-uppercase" href="<?= base_url('login_user')?>">Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>