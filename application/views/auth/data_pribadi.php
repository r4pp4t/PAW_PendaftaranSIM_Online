
<div class="col-sm-12" style="background-color: #F8F9F9;padding-top: 4.8%;">
  <h3>Pendaftaran SIM Online</h3>
</div>

<div class="container-fluid">    
  <div class="row content">
    <div class="col-sm-12" style="padding-left: 20%; height: 20%;background-color:">
      <a class="btn btn-lg btn-bundar btn-data" data-toggle="tooltip" data-placement="top" title="Informasi Pendaftaran" href="<?= base_url('auth/index') ?>"><img src="<?= base_url('assets/')?>png/badge-4x.png"></a>
      <a class="btn btn-lg btn-bundar btn-data" data-toggle="tooltip" data-placement="top" title="Data Permohonan" href="javascript:void(0)"><img src="<?= base_url('assets/')?>png/paperclip-4x.png"></a>
      <a class="btn btn-lg btn-bundar btn-data btn-selected" data-toggle="tooltip" data-placement="top" title="Data Pribadi" href="javascript:void(0)"><img src="<?= base_url('assets/')?>png/person-4x.png"></a>
      <a class="btn btn-lg btn-bundar btn-data" data-toggle="tooltip" data-placement="top" title="Konfirmasi Data Input" href="javascript:void(0)"><img src="<?= base_url('assets/')?>png/location-4x.png"></a>
      <a class="btn btn-lg btn-bundar btn-data" data-toggle="tooltip" data-placement="top" title="Selesai" href="javascript:void(0)"><img src="<?= base_url('assets/')?>png/check-4x.png"></a>
    </div>
    <div class="col-sm-12" style="background-color: ; margin-top: 1%">
      <div class="col-sm-10" style="background-color: #fff; margin-left: 10%;">
        <nav class="navbar" style="background-color:#EBF5FB ;margin-right: -1.3%;margin-left: -1.3%;" ><h3 style="margin-left: -80%">Data Pribadi</h3></nav>
        <table class="table" style="border: none;">
          <tr>
            <td style="width: 40%; text-align: right;">Kewarganegaraan </td>
            <td style="">
              <div class="custom-control custom-radio">
                <input type="radio" id="radiosim1" name="jenis_sim" class="custom-control-input" value="SIM B1">
                <label class="custom-control-label" for="radiosim1">WNI</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="radiosim2" name="jenis_sim" class="custom-control-input" value="SIM A">
                <label class="custom-control-label" for="radiosim2">WNA</label>
              </div>
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">NIK/Nomor KTP</td>
            <td style="">
              <input type="text" name="ktp" class="form-control">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Nama Lengkap</td>
            <td style="">
              <input type="text" name="name" class="form-control">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Tempat Lahir</td>
            <td style="">
              <input type="text" name="tempat_lahir" class="form-control">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Tanggal Lahir</td>
            <td style="">
              <input type="date" name="tanggal" class="form-control">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Tinggi</td>
            <td style="">
              <input type="text" name="tinggi" class="form-control">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Golongan Darah</td>
            <td style="">
              <input type="text" name="" class="form-control">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Kode Pos</td>
            <td style="">
              <input type="text" name="" class="form-control">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Alamat</td>
            <td style="">
              <input type="text" name="alamat" class="form-control">
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Pendidikan</td>
            <td style="">
              <select class="custom-select custom-select-lg mb-3" name="pendidikan" id="pendidikan">
                <option selected>(Pilih Pendidikan)</option>
                <?php
                foreach ($pendidikan as $pen) {
                  echo "<option value='".$pen['id_pendidikan']."'>".$pen['pendidikan']."</option>";
                }

                ?>

                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td style="width: 40%; text-align: right;">Pekerjaan</td>
            <td style="">
              <select class="custom-select custom-select-lg mb-3" name="pekerjaan" id="pekerjaan">
                <option selected>(Pilih Pekerjaan)</option>
                <?php
                foreach ($pekerjaan as $pek) {

                  echo "<option value='".$pek['id_pekerjaan']."'>".$pek['pekerjaan']."</option>";
                }

                ?>

                ?>
              </select>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>