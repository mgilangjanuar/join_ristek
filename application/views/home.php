<!DOCTYPE Html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Open Recruitment SIG Junior Member &amp; Supporting Division Staff Ristek Fasilkom UI dibuka 26 Januari 2016 pkl 19.00. Silakan login dengan akun SSO Anda untuk melanjutkan.">
		<meta name="author" content="Ristek Fasilkom UI">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Open Recruitment Portal - Ristek Fasilkom UI</title>

		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?= base_url().'assets/css/bootstrap.min.css' ?>">
		<link rel="stylesheet" href="<?= base_url().'assets/css/main.css' ?>">
		<link rel="stylesheet" href="<?= base_url().'assets/css/home.css' ?>">
		<link rel="shortcut icon" type="image/x-icon" href="<?= base_url().'assets/img/favicon.ico' ?>">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<img class="img-responsive center-block" src="http://ristek.cs.ui.ac.id/img/logo-blue.png" alt="logo-ristek" width="90" height="120">
						<h3 class="headline content-font">Ristek Fasilkom UI</h3>				
						<h2 class="headline head-font"><b>EXPLORING TECHNOLOGY</b></h2>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h4 class="headline content-font">Open Recruitment <br>SIG Junior Member &amp; Supporting Division Staff</h4>				
					<div class="row">
						<div class="table-responsive">
							<table class="table borderless SIG-table col-md-10">
								<tbody>
									<tr>
										<td class="text-center">
											<img class="img-responsive center-block" src="<?= base_url().'assets/img/cp.png' ?>" alt="CP" width="60" height="80">
											<span class="content-font headline"><b>Competitive<br>Programming</b></span>
										</td>
										<td class="text-center">
											<img class="img-responsive center-block" src="<?= base_url().'assets/img/ds.png' ?>" alt="Data Science" width="60" height="80">
											<span class="content-font headline"><b>Data<br>Science</b></span>
										</td>
										<td class="text-center">
											<img class="img-responsive center-block" src="<?= base_url().'assets/img/embed.png' ?>" alt="Embeded System" width="60" height="80">
											<span class="content-font headline"><b>Embedded<br>System</b></span>
										</td>
										<td class="text-center">
											<img class="img-responsive center-block" src="<?= base_url().'assets/img/netsos.png' ?>" alt="NetSos" width="60" height="80">
											<span class="content-font headline"><b>Network Security and<br>Operating System</b></span>
										</td>
									</tr>
									<tr>
										<td class="text-center">
											<img class="img-responsive center-block" src="<?= base_url().'assets/img/game.png' ?>" alt="Game Dev" width="60" height="80">
											<span class="content-font headline"><b>Game<br>Development</b></span>
										</td>
										<td class="text-center">
											<img class="img-responsive center-block" src="<?= base_url().'assets/img/mob.png' ?>" alt="Mobile Dev" width="60" height="80">
											<span class="content-font headline"><b>Mobile Application<br>Development</b></span>
										</td>
										<td class="text-center">
											<img class="img-responsive center-block" src="<?= base_url().'assets/img/ux.png' ?>" alt="UI/UX" width="60" height="80">
											<span class="content-font headline"><b>UI/UX<br>&nbsp;</b></span>
										</td>
										<td class="text-center">
											<img class="img-responsive center-block" src="<?= base_url().'assets/img/web.png' ?>" alt="Web Dev" width="60" height="80">
											<span class="content-font headline"><b>Web<br>Development</b></span>
										</td>
									</tr>
									<tr>
										<td class="text-center">
											
										</td>
										<td class="text-center">
											<img class="img-responsive center-block" src="<?= base_url().'assets/img/pr.png' ?>" alt="Mobile Dev" width="60" height="80">
											<span class="content-font headline"><b>Public Relation</b></span>
										</td>
										<td class="text-center">
											<img class="img-responsive center-block" src="<?= base_url().'assets/img/hr.png' ?>" alt="UI/UX" width="60" height="80">
											<span class="content-font headline"><b>Human Resources Management</b></span>
										</td>
										<td class="text-center">
											
										</td>
									</tr>
								</tbody>
							</table>											
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12 col-md-offset-1">
							<span class="content-font quote"><i>“Yesterday I was clever, so I wanted to change the world. Today I am wise, so I am changing myself” <br>-Rumi</i></span>	
						</div>
						
					</div><br>
					<div class="row">			

						<?php if ((time()-(60*60*24)) < strtotime('2016-01-26 08:59:59.0')): ?>
						<p class="text-center">Registrasi dibuka pada 26 Januari 2016 pkl 18.00wib</p>					
						<?php endif; ?>

						<div class="col-md-4 col-md-offset-2 text-center ">					
							<a href="<?= site_url('info') ?>" class="btn btn-primary btn-lg center-block sso-btn">More info</a>	
						</div>
						<div class="col-md-4 text-center ">					
							<a href="<?= site_url('ssologin') ?>" class="btn btn-default btn-lg center-block">SSO Login</a>	
						</div>				
					</div>
				</div>
			</div>
			
		</div>		
		<script type="text/javascript" src="<?= base_url().'assets/js/jquery.min.js' ?> "></script>		
		<script type="text/javascript" src="<?= base_url().'assets/js/bootstrap.min.js' ?>"></script>
	</body>
</html>