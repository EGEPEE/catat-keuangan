<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NEW ACCOUNT</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/user_tambah.css'?>">
    <!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/materialize/js/materialize.min.js' ?>"></script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        NEW ACCOUNT
      </div>
      <div class="content">
        <div class="isi">
          <form class="col s12" action="<?php echo base_url().'user/tambah_aksi'; ?>" method="post">
            <div class="row">
              <div class="input-field col s11">
                <input value="" type="text" class="validate" name="nama">
                <label id="lbl" class="active">Name : </label>
              </div>
              <div class="input-field col s11">
                <input value="" type="email" class="validate" name="email">
                <label id="lbl" class="active">Email : </label>
              </div>
              <div class="input-field col s11">
                <input value="" type="password" class="validate" name="password">
                <label id="lbl" class="active">Password : </label>
              </div>
              <div class="input-field col s11">
                <input type="submit" class="btn waves-effect cyan lighten-2" value="SUBMIT" style="float: right;">
                <div class="btn waves-effect cyan lighten-3">
                  <?php echo anchor('login', 'CANCEL'); ?>
                </div>
              </div>
          </form>
          </div>
      </div>
    </div>
  </body>
</html>
