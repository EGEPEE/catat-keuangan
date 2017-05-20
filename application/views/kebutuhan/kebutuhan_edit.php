<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>UBAH KEBUTUHAN</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets\materialize\css\kebutuhan_style.css'?>">
    <script type="text/javascript" src="<?php echo base_url().'assets\materialize\js\jquery-2.1.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/materialize/js/materialize.min.js' ?>"></script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        UBAH KEBUTUHAN
        <p></p>
      </div>

      <div class="content">
        <div class="isi">
          <?php foreach ($post as $p) { ?>
          <form class="col s12" action="<?php echo base_url().'kebutuhan/update'; ?>" method="post">
            <div class="row">
              <div class="input-field col s11">
                <label>Tanggal</label><br>
                <input type="date" class="datepicker" name="tanggal" data-value="<?php echo $p->tanggal ?>">
              </div>

              <div class="input-field col s11">
                <textarea id="textarea1" name = "catatan" class="materialize-textarea"><?php echo $p->catatan ?></textarea>
                <label>Catatan</label>
              </div>

              <div class="input-field col s11">
                <input type="hidden" name="id" value="<?php echo $p->id_kebutuhan ?>">
                <input type="submit" class="btn waves-effect teal lighten-2" value="UPDATE" style="float: right;">
                <div class="btn waves-effect teal lighten-2">
                  <?php echo anchor('kebutuhan', 'BACK'); ?>
                </div>
              </div>
          </form>
        <?php } ?>
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
         $('#textarea1').trigger('autoresize');
      });
    </script>
  </body>
</html>
