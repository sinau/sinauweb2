<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elements - Spectral by HTML5 UP</title>
		<meta charset="utf-8" />
         <link rel="shortcut icon" href="images/page/icon.jpeg">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>    
          <?php
        include_once'header.php';
        ?>
<br>
<br>
<br>

									<h4><center>Pendaftaran Member baru</center></h4>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="name" value="" placeholder="Name" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="email" name="email" value="" placeholder="Email" />
											</div>
											<div class="12u$">
												<div class="select-wrapper">
													<select name="demo-category" id="demo-category">
														<option value="">- Jenis Kelamin -</option>
														<option value="men">Pria</option>
														<option value="woman">Wanita</option>
													</select>
												</div>
											</div>
                                            <div class="6u 12u$(xsmall)">
												<input type="text" name="nohp" value="" placeholder="No Hp" />
											</div>
											<div class="6u 12u$(xsmall)">
												<input type="text" name="univ" value="" placeholder="Universitas" />
											</div>
											
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="DAFTAR" name="daftar" class="special" /></li>
													
												</ul>
											</div>
										</div>
									</form>


        <?php
        include_once'footer.php';
        ?>
        <!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

</body>
</html>