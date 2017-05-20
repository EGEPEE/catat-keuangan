<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/home_style.css'?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/materialize/js/jquery-2.1.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.min.js');?>"></script>
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="nav-wrapper teal lighten-1">
          <a href="home" class="brand-logo"><i class="material-icons">loyalty</i>DOMPET-KU!</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="kebutuhan">Catat Kebutuhan</a></li>
            <li><a href="transaksi">Catat Keuangan</a></li>
            <li><a href="about">About</a></li>
            <li><a href="home/logout">Logout</a></li>
          </ul>
          <ul id="slide-out" class="side-nav">
           <li><div class="userView">
             <div class="background">
               <img src="<?php echo base_url().'assets\materialize\images\images.jpg'?>">
             </div>
             <a href="#!user"><img class="circle" src="<?php echo base_url().'assets\materialize\images\user.png'?>"></a>
             <a href="#!name"><span class="white-text name"><?php echo $this->session->userdata['logged_in']['nama']; ?></span></a>
             <a href="#!email"><span class="white-text email"><?php echo $this->session->userdata['logged_in']['email']; ?></span></a>
           </div></li>
           <li><a href="kebutuhan"><i class="material-icons">shopping_basket</i>Catat Kebutuhan</a></li>
           <li><a href="transaksi"><i class="material-icons">payment</i>Catat Keuangan</a></li>
           <li><div class="divider"></div></li>
           <li><a class="waves-effect" href="about">About</a></li>
           <li><a class="waves-effect" href="home/logout">Logout</a></li>
         </ul>
         <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
      </nav>
      <div class="isi center-align">
        <div class="kebutuhan">
          <img src="<?php echo base_url().'assets\materialize\images\online-shop.png'?>" alt="shopping-cart.jpg">
          <h5>Catat Kebutuhan</h5>
          <p>Catat kebutuhan dimaksudkan agar dapat mencatat seluruh kebutuhan yang akan dibeli atau sebagai pencatatan rencana belanja</p>
        </div>
        <div class="keuangan">
          <img src="<?php echo base_url().'assets\materialize\images\economy.png'?>" alt="shopping-cart.jpg">
          <h5>Catat Keuangan</h5>
          <p>Catat kebutuhan dimaksudkan agar dapat mencatat semua transaksi yang dilakukan agar mengetahui kronologi atas pmasukan dan pengeluaran</p>
        </div>
      </div>
      <div class="footer teal lighten-1 center-align">
        &copy; Copyright 2017 Ega Prasetianti. All Right Reserved.
      </div>
    </div>
    <script type="text/javascript">
       $(".button-collapse").sideNav();
    </script>
  </body>
</html>
