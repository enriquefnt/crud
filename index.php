<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
       integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>CRUD
	</title>

</head>
<body>
<div class="conteiner">
	<h1 class="text-center">
		CRUD
	</h1>
</div>
<div class=row>
	<div class="col-2 offset-10">
		<div class="text-center">
			<button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#ModalUsuario" id="botonCrear">
  <i class="bi bi-plus-circle-fill">Agregar</i>
</button>
		</div>
	</div>
</div>
<div class="table-responsive">
	<table id="datos-usuario" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Tel</th>
				<th>Email</th>
				<th>Imagen</th>
				<th>Editar</th>
				<th>Borrar</th>
			</tr>
	</table>
</div>
<!-- Modal -->
<div class="modal fade" id="ModalUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Crear Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" id="formulario" enctype="multipart/form-data">
      	<div class="modal-content">
      		<label for="nombre">Ingrese el nombre</label>
      		<input type="text" name="nombre" id="nombre"  class="form-control">
      		<br/>
      		<label for="apellidos">Ingrese el Apellido</label>
      		<input type="text" name="apellidos" id="apellidos"  class="form-control">
      		<br/>
      		<label for="telefono">Ingrese el Teléfono</label>
      		<input type="text" name="telefono" id="telefono"  class="form-control">
      		<br/>
      		<label for="email">Ingrese el Email</label>
      		<input type="email" name="email" id="email"  class="form-control">
      		<br/>
      		<label for="imagen">Cargue su foto</label>
      		<input type="file" name="imagen_usuario" id="imagen_usuario"  class="form-control">
      		<span id="imagen-subida"></span>
      		<br/>
      		<div class="modal-footer">
      			<input type="hidden" name="id_usuario" id="id_usuario">
      			<input type="hidden" name="operacion" id="operacion">
      			<input type="submit" name="action" id="action" class="bte bte-success" value="Crear">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
       	</div>
      </form>
      </div>
       </div>
  </div>
</div>
</body>
<script
	  src="https://code.jquery.com/jquery-3.6.0.min.js"
	  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script 
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
	crossorigin="anonymous"></script>




</html>