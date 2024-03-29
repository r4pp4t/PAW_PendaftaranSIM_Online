function search(){
  $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?= base_url('data_permohonan/search') ?>", // Isi dengan url/path file php yang dituju
        data: {nik : $("#nik").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
    },
    success: function(response){ // Ketika proses pengiriman berhasil
            if(response.status == "success"){ // Jika isi dari array status adalah success
        $("#nama").val(response.nama); // set textbox dengan id nama
        $("#alamat").val(response.alamat); // set textbox dengan id alamat
      }else{ // Jika isi dari array status adalah failed
        alert("Data Tidak Ditemukan");
      }
    },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
      alert(xhr.responseText);
        }
    });
}
$(document).ready(function(){
    $("#btn-search").click(function(){ // Ketika user mengklik tombol Cari
        search(); // Panggil function search
    });
    
    $("#nik").keyup(function(){ // Ketika user menekan tombol di keyboard
    if(event.keyCode == 20){ // Jika user menekan tombol ENTER
      search(); // Panggil function search
    }
  });
});