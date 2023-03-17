<!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agendamento de Serviços</title>
        <style>
.my-class {
	background-color: #CCCCCC;
}
          </style>
       @vite([
       'resources/css/app.css',
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
            ])

            
    </head>

    <body>
<div class="my-class">
            <br>
       <form>
<div class="container">
<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
        <div class="container-fluid">
				<a class="navbar-brand" href="#"><h3>Sistema web</h3></a>
        </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
					</ul>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h4 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h4>
					<p class="card-text">Sistema utilizado para agendamento de serviços.</p>
<br>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome:</label><br>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3"><br>
  <label for="exampleInputPassword1" class="form-label">Telefone:</label><br>
  <input type="text" class="form-control" placeHOLDER="(XX) XXXXX-XXXX" id="exampleInputPassword1">
  </div><br>
  
  <label for="exampleInputPassword1" class="form-label">Origem:</label><br>
  <select id="disabledSelect" class="form-select">
<option>Celular</option>
<option>Telefone Fixo</option>
  </select><br>

  <div class="mb-3"><br>
  <label for="exampleInputPassword1" class="form-label">Data do Contrato:</label><br>
  <input type="date" class="form-control" id="exampleInputPassword1">
  </div><br>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Observações:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   
  <br> <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

</div>
    </body>
</html>
