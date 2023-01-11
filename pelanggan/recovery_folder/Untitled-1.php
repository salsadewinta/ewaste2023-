<?php
include "koneksi.php";
$status			=$_POST['statuss'];
if($kegiatan1 == 'konfirmasi'){
    echo  '<div>
    <i class="fas fa-truck bg-gray"></i>
    <div class="timeline-item">
      <h3 class="timeline-header">Order Terkonfirmasi</h3>

      <div class="timeline-body">
        Petugas sedang dalam perjalanan untuk mengangkut sampahmu
      </div>
    </div>
  </div>'
}elseif($nilai =='selesai'){
  echo              
  '<div>
      <i class="fas fa-thumbs-up bg-gray"></i>
      <div class="timeline-item">
          <h3 class="timeline-header">Order Selesai</h3>
          <div class="timeline-body">
              Sampahmu telah berhasil dijemput oleh petugas kami
              <br>
              <a href="kw.php" class="btn btn-primary" role="button">Cetak Invoice</a>
          </div>
      </div>
  </div>'
}
?>