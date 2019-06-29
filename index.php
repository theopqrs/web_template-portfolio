<?php
include('config.php');
$pdo = new PDO('mysql:host=localhost;dbname=portofilio_site', 'root', '');
$pictures = $pdo->query("SELECT * FROM pictures ORDER BY id DESC");
retrieve_info_site();
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $_SESSION['site_title']; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php"><strong><?php echo $_SESSION['admin_name']; ?></strong></a></h1>
						<nav>
							<ul>
								<li><a href="#footer" class="icon fa-info-circle">About</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
						<?php while ($a = $pictures->fetch()) {?>
						<article class="thumb">
							<a href="<?php echo $a['picture_full']; ?>" class="image"><img src="<?php echo $a['picture_thumb']; ?>" alt="" /></a>
							<h2><?php echo $a['picture_title']; ?></h2>
							<p><?php echo $a['picture_full']; ?></p>
						</article>
					<?php	} ?>
					</div>

				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner split">
							<div>
								<section>
									<p><?php echo $_SESSION['admin_description']; ?></p>
								</section>
								<section>
									<h2>Follow me on ...</h2>
									<ul class="icons">
										<li><a href="<?php echo $_SESSION['admin_twitter']; ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="<?php echo $_SESSION['admin_facebook']; ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="<?php echo $_SESSION['admin_instagram']; ?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="<?php echo $_SESSION['admin_dribble']; ?>" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
									</ul>
								</section>
								<p class="copyright">
									&copy; <?php echo $_SESSION['admin_name']; ?>. Dev: <a href="//twitter.com/theopqrs">theopqrs</a> | Design: <a href="http://html5up.net">HTML5 UP</a>.
								</p>
							</div>
							<div>
								<section>
									<h2>Get in touch</h2>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="field half">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
											<div class="field">
												<textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><input type="submit" value="Send" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</form>
								</section>
							</div>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>