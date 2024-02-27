<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
				<meta name="description" content="" />
				<meta name="author" content="" />
				<title>Bare - Start Bootstrap Template</title>
				<!-- Favicon-->
				<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
				<!-- Core theme CSS (includes Bootstrap)-->
				<link href="/public/css/styles.css" rel="stylesheet" />
		</head>
		<body>
				<!-- Responsive navbar-->
				<?php
				require_once __DIR__ . '/../../components/Navigation.php';
				 $navigation = new Navigation();
				 $navigation->render();
				 ?>

				<!-- Page content-->
				<div id="pageContent" class="container">
						<div class="text-center mt-5">
								<h1>Leader Board</h1>
								<p"lead">Here you will see the top clicking speed throughout the game!</p>
								<h1>Ready to beat the record!!!</h1>
						</div>
				</div>
				<!-- Bootstrap core JS-->
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
				<!-- Core theme JS-->
				<script src="js/scripts.js"></script>
		</body>
</html>
