<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>LOGIN - Aplikasi E-Library</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-js'; ?>"></script>
</head>
<body>
	 <body style=" background-image: url(assets/upload/bg2.jpg); background-size:cover;" >
	<div class="col-nd-4 col-nd-offset-4" style="margin-top:50px">
		<center>
			<h1 style="color:#fff";>PERPUSTAKAAN UNIVERSITAS BINA SARANA INFORMATIKA</h1>
            <h2 style="color:#fff">LOGIN</h2>
        </center>
		<br>
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=='gagal'){
				echo "<div class='alert alert-danger alert-danger'>";
				echo $this->session->flashdata('aleart');
				echo "</div>";
			} else if ($_GET['pesan']=='logout'){
				if($this->session->flashdata())
				{ 
					echo "<div class='alert alert-danger alert-success'>";
				echo $this->session->flashdata('Anda telah logout');
				echo "</div";
			    }
			 } else if ($_GET['pesan']=='Belum login'){
				if($this->session->flashdata())
				{ 	
				 echo "<div class='alert alert-danger alert-primary'>";
				 echo $this->session->flashdata('aleart');
				 echo "</div>";
			   }
			}
		    }else{
		    	if($this->session->flashdata())
				{ 	
				 echo "<div class='alert alert-danger alert-massage'>";
				 echo $this->session->flashdata('aleart');
				 echo "</div>";
			   }
		    }
		    ?>
		    <div class="panel panel-default col-md-4 col-md-offset-4" style="background:linear-gradient(to right,#969696 0%,#1ababc 50%,#1a1abc 100%)">>
		       <img src="assets/upload/bsi.jpg" width="140" style="display: block; margin: auto; border-radius:50%;">
		    	<div class="panel-body">
		    		<br><br>
		    		<form method="post" action="<?php echo base_url().'welcome/login'?>">
		    		<div class="form-group">
		    			<input type="text" name="username" placeholder="Username" class="form-control">
						<?php echo form_error('username'); ?>
					</div>
		    		<div class="form-group">
		    			<input type="password" name="password" placeholder="Password" class="form-control">
		    			<?php echo form_error('password'); ?>
		    	     </div>
		    	     <div class="form-group">
		    	     	<input type="submit" value="Login" class="btn btn-primary">
		    	     </div>
		    	    </form>
		    	     <br><br>
		    	   </div>
		    	  </div>
		    	 </div>
		    	 <script type="text/javascript"> 
		    	 $('.alert-massage').alert().delay(3000).slideup('slow');</script>

</body>
</html>