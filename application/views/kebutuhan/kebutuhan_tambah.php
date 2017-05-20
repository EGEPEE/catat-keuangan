<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>KEBUTUHAN BARU</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets\materialize\css\kebutuhan_style.css'?>">
    <script type="text/javascript" src="<?php echo base_url().'assets\materialize\js\jquery-2.1.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/materialize/js/materialize.min.js' ?>"></script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        CATAT KEBUTUHAN
        <p>Apa yang saya butuhkan?</p>
      </div>
      <div class="content">
        <div class="isi">
          <form class="col s12" action="<?php echo base_url().'kebutuhan/tambah_aksi'; ?>" method="post">
            <div class="row">
              <div class="input-field col s11">
                <label>Tanggal</label><br>
                <input type="date" class="datepicker" name="tanggal">
              </div>
              <div class="input-field col s11">
                <textarea id="textarea1" name = "catatan"
                 class="materialize-textarea"></textarea>
                <label>Catatan</label>
              </div>
              <div class="input-field col s11">
                <input type="submit" class="btn waves-effect teal lighten-2" value="SUBMIT" style="float: right;">
                <div class="btn waves-effect teal lighten-2">
                  <?php echo anchor('kebutuhan', 'BACK'); ?>
                </div>
              </div>
          </form>
          </div>
      </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
        $('.datepicker').pickadate({
          format: 'yyyy-mm-dd',
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15 // Creates a dropdown of 15 years to control year
        });
        $('#textarea1').val('');
        $('#textarea1').trigger('autoresize');
      });

    </script>
  </body>
</html>
