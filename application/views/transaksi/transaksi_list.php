<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CATAT KEUANGAN</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/transaksi_list.css'?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/materialize/js/jquery-2.1.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/materialize/js/materialize.min.js' ?>"></script>
  </head>
  <body>
    <div class="container">
      <div class="header row">
        <div id="btn">
          <div class="waves-effect teal lighten-4 btn">
          <?php echo anchor('transaksi/tambah', 'TAMBAH CATATAN'); ?>
          </div>
          <h4 style="float: right;">CATATAN KEUANGAN</h4>
        </div>
      </div>
      <div class="isi">
          <table id="table" class="centered striped teal lighten-3">
            <thead>
              <tr>
                  <th>Jenis</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                  <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($post as $p) {
              ?>
                <tr>
                    <td><?php echo $p->jenis ?></td>
                    <td><?php echo $p->tanggal ?></td>
                    <td><?php echo $p->keterangan ?></td>
                    <td><?php echo $p->jumlah ?></td>
                    <td>
                      <?php echo anchor('transaksi/edit/'.$p->id_transaksi, 'Ubah'); ?>
                      <?php echo anchor('transaksi/hapus/'.$p->id_transaksi, 'Hapus'); ?>
                    </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>

      <div class="manipulasi">
        <table id="table" class="centered striped teal lighten-3">
          <thead>
            <tr>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
                <th>Saldo Akhir</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <?php foreach ($sum_pemasukan as $row) { ?>
                <td id="pemasukan"><?php echo $row->total ?></td>
            <?php } ?>

            <?php foreach ($sum_pengeluaran as $row) { ?>
                <td id="pengeluaran"><?php echo $row->total ?></td>
            <?php } ?>
                <td id="saldo_akhir"></td>
              </tr>
          </tbody>
        </table>
      </div>

      <div class="footer">
        <div id="btn2" style="padding-top:1%;">
          <div class="waves-effect teal lighten-4 btn">
            <?php echo anchor('home', 'BACK'); ?>
          </div>
        </div>
      </div>
  </div>

  <script type="text/javascript">
  $('document').ready(function(){
    var pemasukan = $('#pemasukan').text();
      var pengeluaran = $('#pengeluaran').text();
      var saldo_akhir = pemasukan - pengeluaran;
      $('#saldo_akhir').text(saldo_akhir);
      var bulan = ['Pilih Bulan', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember',]
      for(i=1; i<=12; i++){
          $('.pilih-bulan').append("<option value=" + i + ">" + bulan[i] + "</option>");
      }
      $('select').material_select();
      $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15
       // Creates a dropdown of 15 years to control year
      });
  });
  </script>
  </body>
</html>
