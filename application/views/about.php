<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>About Us</title>
    <link rel="stylesheet" href="assets/materialize/css/materialize.css">
    <link rel="stylesheet" href="assets/materialize/css/about.css">
    <script type="text/javascript" src="<?php echo base_url().'assets\materialize\js\jquery-2.1.1.min.js'?>"></script>
    <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h3 style="float: right;">About Me</h3>
      </div>

      <div class="content">
        <img src="<?php echo base_url().'assets\materialize\images\crop.jpg' ?>" alt="Ega Prasetianti">
        <table class="bordered">
          <tr>
            <td>Nama Lengkap</td>
            <td>Ega Prasetianti</td>
          </tr>
          <tr>
            <td>Status</td>
            <td>Mahasiswa</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>Pondok Tirta Mandala Blok W Nomor 20</td>
          </tr>
          <tr>
            <td>Nomor Telepon</td>
            <td>081294585485</td>
          </tr>
        </table>
      </div>

      <div class="footer">
        <div id="btn2">
          <div class="waves-effect teal lighten-3 btn">
            <?php echo anchor('home', 'BACK'); ?>
          </div>
        </div>
    </div>

    </div>
  </body>
</html>
