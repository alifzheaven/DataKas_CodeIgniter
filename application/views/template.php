<!DOCTYPE html>
<html>
     <head>
          <title>CRUD in Codeigniter 3</title>
          <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
     </head>
     <body>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container">
                    <a class="navbar-brand" href="#">CRUD</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                         <div class="navbar-nav">
                              <?php
                                   echo anchor('beranda','Beranda','class="nav-item nav-link"');
                                   echo anchor('tentang','Tentang','class="nav-item nav-link"');
                                   echo anchor('siswa','Siswa','class="nav-item nav-link"');    
                              ?>
                         </div>
                    </div>
               </div>
          </nav>

          <div class="container">
               <?php $this->load->view($content); ?>
          </div>

          <center><small>&copy; 2018 - SMKN 1 SUBANG</small></center>
          <center><small>&copy; wine yuliani  </small></center>

          <script src="<?php echo base_url('assets/js/jquery-3.3.1.slim.min.js'); ?>"></script>
          <script src="<?php echo base_url('assets/js/popper.1.14.0.min.js'); ?>"></script>
          <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
     </body>
</html>
