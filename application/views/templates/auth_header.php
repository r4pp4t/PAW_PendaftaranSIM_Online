<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    <?= $title; ?>  
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
  <link href="<?= base_url('assets/'); ?>assets/css/login-register.css" rel="stylesheet" />
  <link href="<?= base_url('assets/'); ?>assets/css/bootstrap.css" rel="stylesheet" />
  <link href="<?= base_url('assets/'); ?>fontawesome/css/all.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/'); ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/'); ?>assets/js/bootstrap.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/'); ?>assets/js/login-register.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/'); ?>assets/js/config.js" type="text/javascript"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .btn-bundar {border-radius: 50%;
        height: 50%;
        width: 7%;
        background-color: #fff;
        margin-left: 8%;
        border: solid 2px;
        border-color: grey;
        margin-top: 1%;
        margin-bottom: 2%;
        padding-top: 1.5%;
    }
    .btn-bundar:hover{
      background-color: #D6EAF8;
      border-color: black;
      -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
      -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
      box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
      transition: all 0.4s ease 0s;
    }
    .btn-selected{
      border-color: purple;
      background-color: #D6EAF8  ;
    }
    .btn-data{
      margin-bottom: -5%;
      padding-bottom: 5%;
    }


    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
      .fixed-nav-bar {
          position: fixed;
          top: 0;
          left: 0;
          z-index: 9999;
          width: 100%;
          height: 50px;
        }
    }
  </style>
</head>
<body style="background-color: #F2F3F4 ">
  <nav class="navbar" style="background-color: #fff; border-color: white;position: fixed;
          top: 0;
          left: 0;
          z-index: 9999;
          width: 100%;
          height: 50px;">
      <a href="<?= base_url('auth') ?>"><img src="<?= base_url('assets/')?>img/logo.png" style="width: 50%;margin-left: 25%"></a>
</nav>