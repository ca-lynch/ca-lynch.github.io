<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Cody Lynch - Final Project</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/small-business.css" rel="stylesheet">

</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="http://calynch2.heyuhnem.com/index.html">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="http://calynch2.heyuhnem.com/cody-lynch-directions.html">Directions</a></li>
					<li class="nav-item"><a class="nav-link" href="http://calynch2.heyuhnem.com/cody-lynch-contact.html">Contact</a></li>
					<li class="nav-item"><a class="nav-link" href="http://calynch2.heyuhnem.com/cody-lynch-youtube.html">Youtube</a></li>
					<li class="nav-item"><a class="nav-link" href="http://calynch2.heyuhnem.com/cody-lynch-photo-gallery.html">Gallery</a></li>
					<li class="nav-item"><a class="nav-link" href="http://calynch2.heyuhnem.com/sitemap.html">Sitemap</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<?php
		$message = Null;
			foreach($_POST as $key=>$value) {
				$message .= '<strong>'.$key.'</strong> : '.$value.'<br />';
			}

			$to = "drpatel18@uh.edu";
			$from = "DoNotReply@uh.edu";
			$bcc = "test@yahoo.com, c.a.lynch2013@gmail.com";
			$subject = "CIS2336 Test";
			
			//---------------------------------- email header ----------------------------------//
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
			$headers .= "From: <".$from.">\r\n";
			$headers .= "Bcc: ". $bcc . "\r\n";

			//---------------------------------- email ----------------------------------//
			if(mail($to,$subject,$message,$headers)){
				$finish = 'Succeeded';
			}else{
				$finish = 'Failed';

			}//if

			echo "<h1>The email sent to $to has $finish </h1>";
	?>

	<br>
	<h3> Click <a href="http://calynch2.heyuhnem.com/index.html">here</a> to return home</h3>
	<br>

	<!-- Footer -->
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white"> Copyright &copy; <script>document.write(new Date().getFullYear())</script> Cody Lynch</p>
		</div>
    <!-- /.container -->
	</footer>

  <!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>