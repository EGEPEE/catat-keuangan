<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>KUMPULAN USER</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/userlist_style.css'?>">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/materialize/js/materialize.min.js' ?>"></script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <div id="btn">
          <div class="waves-effect teal lighten-4 btn">
            <?php echo anchor('user/tambah', 'Tambah Data'); ?>
          </div>
          <h4 style="float: right;">ACCOUNT LIST</h4>
        </div>
      </div>
      <div class="isi">
        <table id="table" class="centered striped teal lighten-2">
          <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($user as $u) {?>
            <tr>
              <td><?php echo $u->id_user ?></td>
              <td><?php echo $u->nama ?></td>
              <td><?php echo $u->email ?></td>
            </tr>
            <?php } ?>
          </tbody>
      </table>
    </div>
    <div class="footer">
      <div id="btn2" style="padding-top:1%;">
        <div class="waves-effect teal lighten-4 btn">
          <?php echo anchor('login', 'LOGIN'); ?>
        </div>
      </div>
    </div>
  </body>
</html>
