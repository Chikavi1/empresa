@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col offset-m3 m6">
			<div class="card">
				<h4 class="center-align">Bienvenido al centro de atencion Chikavi</h4>
				<p style="text-align: justify;padding: 1em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, odit distinctio repellendus minus expedita praesentium nam facilis, molestiae molestias ex dignissimos totam voluptas minima voluptate quos. Accusantium temporibus saepe veniam. Ipsam, possimus excepturi earum accusamus nihil minus, soluta incidunt cum, adipisci reprehenderit doloremque architecto eligendi.</p>
				<form action="{{ route('enviar_correo')}}" method="post">
					{{ csrf_field() }}
					<input type="text" name="email" placeholder="correo" required>
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
				<input type="submit" name="primero" class="btn btn-block color-cut margin-bottom-5" value="enviar">
				
				</form>
				
			</div>
		</div>
	</div>
@endsection

