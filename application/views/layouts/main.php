<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<a href="index.php"><title>Pracenje obaveza studenata</title></a>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>
<body>
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="<?php echo base_url(); ?>">LOGO</a>
          <div class="nav-collapse collapse">
            <div style="position:absolute; left:1500px; top:5px;"><p class="navbar-text pull-right">

              <?php if($this->session->userdata('logged_in')) : ?>
               <?php echo $this->session->userdata('username'); ?>
             <?php else : ?>
             <a href="<?php echo base_url(); ?>korisnici/registracija">Registracija</a>
             <?php endif; ?>
            </p>
            </div>
            <ul class="nav">
              <li><a href="<?php echo base_url(); ?>">Početna</a></li>
              <?php if($this->session->userdata('logged_in')) : ?>
                    <li><a href="<?php echo base_url(); ?>kolegiji">Moji kolegiji</a></li>  
               <?php endif; ?>
               </ul>
          </div>
        </div>
      </div>
    </div>



        <div class="span9">
  
			<?php $this->load->view($main_content); ?>
        </div>
		</div>
      

     
    </div>
</body>
</html>