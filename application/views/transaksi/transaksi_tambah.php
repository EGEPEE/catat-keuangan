<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PENCATATAN KEPERLUAN</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets\materialize\css\transaksi_style.css'?>">
    <script type="text/javascript" src="<?php echo base_url().'assets\materialize\js\jquery-2.1.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/materialize/js/materialize.min.js' ?>"></script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        CATAT TRANSAKSI
        <p>Transaksi apa yang telah dilakukan?</p>
      </div>
      <div class="content">
        <div class="isi">
          <form class="col s12" action="<?php echo base_url().'transaksi/tambah_aksi'; ?>" method="post">
            <div class="row">
              <div class="input-field col s11">
                <select class="icons" name="jenis">
                  <option value="0" disabled selected>Choose your option</option>
                  <option value="Pemasukan" data-icon="<?php echo base_url().'assets\materialize\images\rich.png'; ?>" class="left circle">Pemasukan</option>
                  <option value="Pengeluaran" data-icon="<?php echo base_url().'assets\materialize\images\credit-card.png'; ?>" class="left circle">Pengeluaran</option>
                </select>
                <label>Jenis Keuangan : </label>
              </div>
              <div class="input-field col s11">
                <label>Tanggal : </label><br>
                <input type="date" class="datepicker" name="tanggal">
              </div>
              <div class="input-field col s11">
               <input name="keterangan" type="text" class="validate">
               <label>Keterangan : </label>
             </div>
             <div class="input-field col s11">
               <input name = "jumlah" type="number" class="validate" min="100">
               <label>Jumlah</label>
             </div>
              <div class="input-field col s11">
                <input type="submit" class="btn waves-effect teal lighten-3" value="SUBMIT" style="float: right;">
                <div class="btn waves-effect teal lighten-4">
                  <?php echo anchor('transaksi', 'BACK'); ?>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
        $('.datepicker').pickadate({
          format: 'yyyy-mm-dd',
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15
         // Creates a dropdown of 15 years to control year
        });
      });
    </script>
  </body>
</html>
