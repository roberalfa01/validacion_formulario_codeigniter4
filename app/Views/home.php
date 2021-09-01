<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Validacion Formularios</title>
		<link rel="stylesheet" href="<?=base_url('public/css/bootstrap.min.css')?>">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="">Logo</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ms-auto me-auto">
						<a class="nav-link active me-5" href="<?=base_url('/formulario1')?>">Formulario1</a>
					</div>
				</div>
			</div>
		</nav>
		<?php 
			if(!empty(session()->getFlashdata('mensaje'))) :    ?>
                <div class="alert alert-danger text-center" role="alert"><?= session()->getFlashdata('mensaje')?></div>
        <?php
			endif
		?>
		<div class="container text-center mt-5">
			validacion de formulario en codeigniter 4
		</div>
		<script src="<?=base_url('public/js/bootstrap.min.js')?>"></script>
	</body>
</html>