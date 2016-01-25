<!DOCTYPE Html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Open Recruitment SIG Junior Member &amp; Supporting Division Staff Ristek Fasilkom UI dibuka 26 Januari 2016 pkl 19.00. Silakan login dengan akun SSO Anda untuk melanjutkan.">
		<meta name="author" content="Ristek Fasilkom UI">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?= $title; ?> - Ristek Fasilkom UI</title>
		
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?= base_url().'assets/css/bootstrap.min.css' ?>">
		<link rel="stylesheet" href="<?= base_url().'assets/css/main.css' ?>">
		<link rel="stylesheet" href="<?= base_url().'assets/css/template.css' ?>">
		<link rel="shortcut icon" type="image/x-icon" href="<?= base_url().'assets/img/favicon.ico' ?>">
	</head>
	<body>
		<header>			
			<img class="img" src="http://ristek.cs.ui.ac.id/img/logo-blue.png" alt="logo-ristek" width="30" height="40">
			<span class="head-font page-title"><b><?= $title; ?></b></span>
			<a class="btn btn-danger well-sm pull-right" href="<?= site_url('logout') ?>">Logout</a>							
			<p class="pull-right">&nbsp;&nbsp;</p>																		
		</header>
		
		<div class="container">			
			<?= $content; ?>
		</div>	

		<footer class="navbar-fixed-bottom text-center">
			<span class="content-font text-info">Ristek Fasilkom UI. Powered by <a href="http://www.codeigniter.com">Codeigniter</a>. Source available on <a href="https://github.com/jundialwan/join_ristek">GitHub</a></span>
		</footer>	

		<script type="text/javascript" src="<?= base_url().'assets/js/jquery.min.js' ?>"></script>		
		<script type="text/javascript" src="<?= base_url().'assets/js/bootstrap.min.js' ?>"></script>		
	</body>	
	
</html>