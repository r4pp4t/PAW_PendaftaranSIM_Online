<!-- <?php
    $polda2= $this->db->get_where('polda_kedatangan',array('id_polda'=>$polda))->row();
    $satpas2= $this->db->get_where('satpas_kedatangan',array('id_satpas'=>$satpas))->row();
    $alamat_sat2= $this->db->get_where('satpas_kedatangan',array('id_satpas'=>$satpas))->row();
?> -->
<div class="col-sm-12" style="background-color: #F8F9F9;padding-top: 4.8%;">
  <h3>Pendaftaran SIM Online</h3>
</div>

<div class="container-fluid">    
  <div class="row content">
    <div class="col-sm-12" style="padding-left: 25%; height: 20%;background-color:">
      <a class="btn btn-lg btn-bundar btn-data" data-toggle="tooltip" data-placement="top" title="Informasi Pendaftaran" href="<?= base_url('auth/index') ?>"><img src="<?= base_url('assets/')?>png/badge-4x.png"></a>
      <a class="btn btn-lg btn-bundar btn-data" data-toggle="tooltip" data-placement="top" title="Data Permohonan" href="javascript:void(0)"><img src="<?= base_url('assets/')?>png/paperclip-4x.png"></a>
      <a class="btn btn-lg btn-bundar btn-data btn-selected" data-toggle="tooltip" data-placement="top" title="Konfirmasi Data Input" href="javascript:void(0)"><img src="<?= base_url('assets/')?>png/location-4x.png"></a>
      <a class="btn btn-lg btn-bundar btn-data" data-toggle="tooltip" data-placement="top" title="Selesai" href="javascript:void(0)"><img src="<?= base_url('assets/')?>png/check-4x.png"></a>
    </div>
    <div class="col-sm-12" style="background-color: ; margin-top: 1%">
      <div class="col-sm-10" style="background-color: #fff; margin-left: 10%;">
        <nav class="navbar" style="background-color:#EBF5FB ;margin-right: -1.3%;margin-left: -1.3%;" ><h3 style="margin-left: -80%">Konfirmasi Data Input</h3></nav>
          <table class="table" style="border: none; margin-bottom: 10%">
            <tr>
              <td style="width: 40%; text-align: right;">Jenis Permohonan :</td>
              <td><b><?php echo $sim_baru; ?></b></td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">Golongan SIM :</td>
              <td><b><?php echo $sim; ?></b></td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">POLDA KEDATANGAN :</td>
              <td><b><?php echo $polda2->polda_kedatangan; ?></b></td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">SATPAS KEDATANGAN :</td>
              <td><b><?php echo $satpas2->satpas_kedatangan; ?></b></td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">ALAMAT SATPAS :</td>
              <td><b><?php echo $alamat_sat2->alamat_satpas; ?></b></td>
            </tr>
            <tr>
             <td style="width: 40%; text-align: right;">Kewarganegaraan :</td>
             <td><b><?php echo $kewarganegaraan; ?></b></td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">Email :</td>
              <td><b><?php echo $email; ?></b></td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">NIK/Nomor KTP :</td>
              <td><b><?php echo $nik; ?></td>
            <tr>
              <td style="width: 40%; text-align: right;">Nama Lengkap :</td>
              <td><b><?php echo $nama; ?></b></td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">Tempat Lahir :</td>
              <td><b><?php echo $tempat_lahir; ?></b></td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">Tanggal Lahir :</td>
              <td><b><?php echo $tgl_lahir; ?></b></td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">Tinggi :</td>
              <td><b><?php echo $tinggi; ?></b></td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">Golongan Darah :</td>
              <td><b><?php echo $gol_darah; ?></b></td>
            </tr>
            <tr>
              <td style="width: 40%; text-align: right;">Alamat :</td>
              <td><b><?php echo $alamat; ?></b></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <form method="post" action="<?php echo site_url('data_permohonan/simpan');?>">
                  <input type="hidden" name="sim_baru" value="<?php echo($sim_baru);?>">
                  <input type="hidden" name="polda_kedatangan" value="<?php echo($polda);?>">
                  <input type="hidden" name="satpas_kedatangan" value="<?php echo($satpas);?>">
                  <input type="hidden" name="alamat_satpas" value="<?php echo($al_sat);?>">
                  <input type="hidden" name="email" value="<?php echo($email);?>">
                  <input type="hidden" name="nik" value="<?php echo($nik);?>">
                  <input type="hidden" name="nama" value="<?php echo($nama);?>">
                  <input type="hidden" name="tempat_lahir" value="<?php echo($tempat_lahir);?>">
                  <input type="hidden" name="tgl_lahir" value="<?php echo($tgl_lahir);?>">
                  <input type="hidden" name="tinggi" value="<?php echo($tinggi);?>">
                  <input type="hidden" name="gol_darah" value="<?php echo($gol_darah);?>">
                  <input type="hidden" name="alamat" value="<?php echo($alamat);?>">
                  <input type="hidden" name="sim" value="<?php echo($sim);?>">
                  <input type="hidden" name="kewarganegaraan" value="<?php echo($kewarganegaraan);?>">


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Pembayaran</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Nominal Rp.100.000,-
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-info" value="Yes">
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>


    </div>
  </div>
</div>

              <!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Kirim
</button>
              </form>
            </td>
            </tr>
          </table>
      </div>
    </div>
  </div>
</div>
