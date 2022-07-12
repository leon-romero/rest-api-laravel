<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

		<h1>Formulario</h1>

		<div class="container">
			<div class="row">
				

				<!-- Method POST -->
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">PUT</h4>

							<form action="{{ route('users.update',$user->id) }}" method="POST">
								@csrf
								@method("PUT")
								<!-- <input type="hidden" name="_method" value="put"> -->

								<div class="mb-3">
									<label for="" class="form-label">Nombre</label>
									<input type="text" name="nombre" id="nombre" value="{{ $user->name }}" class="form-control" required>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">Correo</label>
									<input type="text" name="correo" id="correo" value="{{ $user->email }}" class="form-control" required>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">Password</label>
									<input type="text" name="password" id="password" value="{{ $user->password }}" class="form-control" required>
								</div>

								<div class="d-grid gap-2">
									<button type="submit" class="btn btn-primary">Enviar</button>
								</div>

							</form>
						</div>
					</div>
				</div>

			</div>
		</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
