<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ajax Contact Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

	<!-- ajax contact form -->
	<section style="margin-top: 50px;">
		<div class="container" style="background-image: url('https://www.redeszone.net/app/uploads-redeszone.net/2019/11/internet-extranet-intranet.jpg');">
			</br>
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="row">
							<div class="col-sm-3 text-center">
								<img src="https://www.processmaker.com/wp-content/uploads/2019/10/processmaker-partners-treda-solutions.png" width="90%" height="90%">
							</div>
							<div class="col-sm-9 text-center">
								<h5 class="card-header">Prueba práctica de PHP</h5>
							</div>
						</div>
						<div class="card-body">
							<form class="contact__form" method="post" action="../php/mail.php">

								<!-- form message -->
								<div class="row">
									<div class="col-12">
										<div class="contact__msg" style="display: none">
											<p>Your message was sent successfully.</p>
										</div>
									</div>
								</div>
								<!-- end message -->

								<!-- form element -->
								<div class="row">
									<div class="col-md-12 form-group">
										Por favor digite el id de la tienda para conocer sus productos.
									</div>

									<div class="col-md-12 form-group">
										<input name="id_tienda" type="text" class="form-control" placeholder="ID de la tienda" required>
									</div>
									<div class="col-12 form-group">
										<div class="g-recaptcha" data-sitekey="6LfePbgZAAAAAJ6ZF-8kxFxrYJVOeCfGyygQrYPs"></div>
									</div>
									<div class="col-12">
										<input name="submit" type="submit" class="btn btn-success" value="Ver productos">
									</div>
								</div>
								<!-- end form element -->
							</form>
						</div>
					</div>
				</div>
			</div>
			</br>
			<div class="card-deck d-flex justify-content-center">
				<div class="card text-center bg-light" style="max-width: 21rem;">
					<div class="card-header">Tiendas</div>
					<div class="card-body">
						<p class="card-text">Deaseas agregar tu tienda? Haz click en el botón de abajo.</p>
						<a href="/agregar-tienda" class="btn btn-primary">Agregar tienda</a>
					</div>
				</div>
				<div class="card text-center bg-light" style="max-width: 21rem;">
					<div class="card-header">Productos</div>
					<div class="card-body">
						<p class="card-text">Deaseas agregar un producto? Haz click en el botón de abajo.</p>
						<a href="/agregar-producto" class="btn btn-primary">Agregar producto</a>
					</div>
				</div>
			</div>
			</br>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="../js/main.js"></script>
</body>

</html>