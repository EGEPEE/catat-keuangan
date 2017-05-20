<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CATAT KEBUTUHAN</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/userlist_style.css'?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/materialize/js/jquery-2.1.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/materialize/js/materialize.min.js'?>"></script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <div id="btn">
          <div class="waves-effect teal lighten-5 btn">
          <?php echo anchor('kebutuhan/tambah', 'TAMBAH CATATAN'); ?>
          </div>
          <h4 style="float: right;">CATATAN KEBUTUHAN</h4>
        </div>
      </div>
      <div class="isi">
        <table id="table" class="centered striped  teal lighten-3">
          <thead>
            <tr>
                <th>Catatan</th>
                <th>Tanggal</th>
                <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($post as $p) {
               ?>
              <tr>
                  <td><?php echo $p->catatan ?></td>
                  <td><?php echo $p->tanggal ?></td>
                  <td>
                    <?php echo anchor('kebutuhan/edit/'.$p->id_kebutuhan, 'Ubah'); ?>
                    <?php echo anchor('kebutuhan/hapus/'.$p->id_kebutuhan, 'Hapus'); ?>
                  </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="footer">
        <div id="btn2" style="padding-top:1%;">
          <div class="waves-effect teal lighten-5 btn">
            <?php echo anchor('home', 'BACK'); ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
