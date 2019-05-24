@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col offset-m3 m6">
			<div class="card">
				<h4 class="center-align">Bienvenido al centro de atencion Chikavi</h4>
				<p style="text-align: justify;padding: 1em;">Durante el desarrollo del actual manual de usuario te capacitaremos para que seas capaz de hacer uso de todas las herramientas que te brindamos, realizar tus reportes de incidencia sin ningún problema y utilizar de manera correcta nuestro servicio de soporte y asistencia técnica.Para cualquier malentendido u problema con el contenido , favor de comunicarse con CHIKAVI´S.com</p>
				<form action="{{ route('enviar_correo')}}" method="post">
					{{ csrf_field() }}

				<div class="p5">

					<div class="input-field col offset-m3 m6">
			          <input id="email" name="email" type="text" class="validate">
			          <label for="email">Correo electronico</label>
			        </div>

				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	Me genera mal los totales de venta">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	Tengo problemas al agregar un nuevo producto">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	No me deja Ingresar con mi contraseña">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	Se me bloqueo mi cuenta">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	En ocaciones no se generan los pedidos">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	La pagina se cayo">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	No me permite registrar un nuevo usuario">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	No me permite modificar los valores de los productos">
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="	No puedo Imprimir mi ticket">

			
				<p class="center-align">Si en caso de tener otro incidente rellena aqui</p>
				<textarea name="otro" id="" cols="30" rows="10" placeholder="otro incidente"></textarea>

				</div>

				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="enviar">
				
				</form>
				
			</div>
		</div>
	</div>
@endsection

