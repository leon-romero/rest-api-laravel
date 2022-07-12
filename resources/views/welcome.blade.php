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
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">GET</h4>
							<!-- <p class="card-text">Text</p> -->

							forma 1
							<a href="https://jsonplaceholder.typicode.com/posts">ENVIAR GET</a>

							<br>
							forma 2
							<form action="https://jsonplaceholder.typicode.com/posts" method="get">
								<button type="submit" class="btn btn-primary">Enviar</button>
							</form>
						</div>
					</div>
				</div>

				<!-- Method POST -->
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">POST</h4>

							<form action="https://jsonplaceholder.typicode.com/posts" method="POST">
								<input type="hidden" name="userId" value="1">

								<div class="mb-3">
									<label for="" class="form-label">Title</label>
									<input type="text" name="title" id="title" class="form-control" required>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">Body</label>
									<input type="text" name="body" id="body" class="form-control" required>
								</div>

								<div class="d-grid gap-2">
									<button type="submit" class="btn btn-primary">Enviar</button>
								</div>

							</form>
						</div>
					</div>
				</div>

				<!-- Method PUT -->
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">PUT / PATCH</h4>
							<input type="hidden" name="_method" value="PUT">

							<form action="https://jsonplaceholder.typicode.com/posts/1" method="PUT">
								<input type="hidden" name="userId" value="1">


								<div class="mb-3">
									<label for="" class="form-label">Title</label>
									<input type="text" name="title" id="title" class="form-control" required>
								</div>

								<div class="mb-3">
									<label for="" class="form-label">Body</label>
									<input type="text" name="body" id="body" class="form-control" required>
								</div>

								<div class="d-grid gap-2">
									<button type="submit" class="btn btn-primary">Enviar</button>
								</div>

							</form>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">DELETE</h4>
							<!-- <p class="card-text">Text</p> -->
							<form action="https://jsonplaceholder.typicode.com/posts/1" method="DELETE">
								<button type="submit" class="btn btn-primary">Enviar</button>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
