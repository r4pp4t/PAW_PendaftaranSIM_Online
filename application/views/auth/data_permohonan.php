
<div class="col-sm-12" style="background-color: #F8F9F9;padding-top: 4.8%;">
  <h3>Pendaftaran SIM Online</h3>
</div>

<div class="container-fluid">    
  <div class="row content">
    <div class="col-sm-12" style="padding-left: 25%; height: 20%;background-color:">
      <a class="btn btn-lg btn-bundar btn-data" data-toggle="tooltip" data-placement="top" title="Informasi Pendaftaran" href="<?= base_url('auth/index') ?>"><img src="<?= base_url('assets/')?>png/badge-4x.png"></a>
      <a class="btn btn-lg btn-bundar btn-data btn-selected" data-toggle="tooltip" data-placement="top" title="Data Permohonan" href="javascript:void(0)"><img src="<?= base_url('assets/')?>png/paperclip-4x.png"></a>
      <a class="btn btn-lg btn-bundar btn-data" data-toggle="tooltip" data-placement="top" title="Konfirmasi Data Input" href="javascript:void(0)"><img src="<?= base_url('assets/')?>png/location-4x.png"></a>
      <a class="btn btn-lg btn-bundar btn-data" data-toggle="tooltip" data-placement="top" title="Selesai" href="javascript:void(0)"><img src="<?= base_url('assets/')?>png/check-4x.png"></a>
    </div>
    <div class="col-sm-12" style="background-color: ; margin-top: 1%">
      <div class="col-sm-10" style="background-color: #fff; margin-left: 10%;">
        <nav class="navbar" style="background-color:#EBF5FB ;margin-right: -1.3%;margin-left: -1.3%;" ><h3 style="margin-left: -80%">Data Permohonan</h3></nav>
        <form method="post" action="<?php echo site_url('data_permohonan/tampil')?>">
          <table class="table" style="border: none; margin-bottom: 10%">
            <tr>
              <td style="width: 40%; text-align: right;">Jenis Permohonan  </td>
              <td style="">
                <div class="custom-control custom-radio">
                  <input type="radio" id="sim_baru" name="sim_baru" class="custom-control-input" value="SIM Baru" checked>
                  <label class="custom-control-label" for="sim_baru">SIM Baru</label>
                </div>
              </td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">Golongan SIM </td>
              <td style="">
                <div class="custom-control custom-radio">
                  <input type="radio" id="radiosim" name="sim_b1" class="custom-control-input" value="SIM B1">
                  <label class="custom-control-label" for="radiosim">SIM B1</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radiosim1" name="sim_a" class="custom-control-input" value="SIM A">
                  <label class="custom-control-label" for="radiosim1">SIM A</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="radiosim2" name="sim_c" class="custom-control-input" value="SIM C">
                  <label class="custom-control-label" for="radiosim2">SIM C</label>
                </div>
              </td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">POLDA KEDATANGAN</td>
              <td style="">
                <select class="custom-select custom-select-lg mb-3" name="polda" id="polda">
                  <option selected>(Pilih POLDA Kedatangan)</option>
                  <?php
                  foreach ($dropdown->result() as $baris) {
                    echo "<option value='".$baris->id_polda."'>".$baris->polda_kedatangan."</option>";
                  }

                  ?>

                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">SATPAS KEDATANGAN</td>
              <td style="">
                <select class="custom-select custom-select-lg mb-3" name="satpas" id="satpas">
                  <option selected>(Pilih SATPAS Kedatangan)</option>
                </select>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('#polda').on('change', function(){
                      var id_polda = $('#polda').val();
                      $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('index.php/data_permohonan/tampil_chained') ?>',
                        data: { 'id' : id_polda },
                        success: function(data){
                          $("#satpas").html(data);
                        }
                      })
                    })
                  })
                </script>
              </td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">ALAMAT SATPAS</td>
              <td style="">
                <select class="custom-select custom-select-lg mb-3" name="al_sat" id="al_sat">
                  <option selected>ALAMAT SATPAS</option>
                </select>
                <script type="text/javascript">
                  $(document).ready(function(){
                    $('#satpas').on('change', function(){
                      var id_satpas = $('#satpas').val();
                      $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('index.php/data_permohonan/tampil_alamat') ?>',
                        data: { 'id' : id_satpas },
                        success: function(data){
                          $("#al_sat").html(data);
                        }
                      })
                    })
                  })
                </script>
              </td>
            </tr>
            <tr>
             <td style="width: 40%; text-align: right;">Kewarganegaraan </td>
             <td style="">
              <div class="custom-control custom-radio">
                <input type="radio" id="radiosim3" name="kewarganegaraan" class="custom-control-input" value="WNI">
                <label class="custom-control-label" for="radiosim3">WNI</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="radiosim4" name="kewarganegaraan" class="custom-control-input" value="WNA">
                <label class="custom-control-label" for="radiosim4">WNA</label>
              </div>
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Email</td>
            <td style="">
              <input type="Email" name="email" class="form-control" required="">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">NIK/Nomor KTP</td>
            <td style="">
              <input type="text" name="nik" class="form-control" id="nik" required=""><button type="button" id="btn-search">Cari</button>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Nama Lengkap</td>
            <td style="">
              <input type="text" name="nama" class="form-control" required="">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Tempat Lahir</td>
            <td style="">
              <input type="text" name="tempat_lahir" class="form-control" required="">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Tanggal Lahir</td>
            <td style="">
              <input type="date" name="tgl_lahir" class="form-control" required="">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Tinggi</td>
            <td style="">
              <input type="number" name="tinggi" class="form-control" required="">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Golongan Darah</td>
            <td style="">
             <select class="custom-select custom-select-lg mb-3" name="gol_darah" id="gol_darah" required="">
              <option selected>(Pilih Golongan Darah)</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="AB">AB</option>
              <option value="O">O</option>
            </select>
          </td>
        </tr>
        <tr>
          <td style="width: 40%; text-align: right;">Alamat</td>
          <td style="">
            <input type="text" name="alamat" class="form-control" required="">
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
          <input type="submit" name="submit" class="btn btn-primary float-right">
        </td>
        </tr>
      </table>
    </form>
  </div>
</div>
</div>
</div>