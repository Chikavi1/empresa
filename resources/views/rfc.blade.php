@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col offset-m3 m6">
		<div class="card">
			<div class="row">
				<div class="col m4">
					<h1 style="text-align: center;">RFC</h1>
				</div>
				<div class="col m8">
					<p>
						<input type="text" placeholder="NUMERO DE RFC"	value="{{$datos->id}}">
					</p>
				</div>
				<div class="col offset-m4 m8">
					<p>
						<input type="text" placeholder="INICIACION"	>
					</p>
				</div>

			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="MOTIVO DEL CAMBIO"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="DESCRIPCION DEL CAMBIO"	>
				</div>
			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="CI(Atributos)"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="ANALISIS DE RIESGO E IMPACTO/RECURSOS"	>
				</div>
			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="PRIORIDAD Y URGENCIA"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="FECHA Y HORA DE IMPLEMENTACION"	>
				</div>
			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="RECOMENDACIÓN DEL CAB"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="IMPLEMENTACION PROLONGADA"	>
				</div>
			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="IMPLEMENTACION DEL CAMBIO"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="RESULTADOS DEL CAMBIO"	>
				</div>
			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="RESULTADO DE LAS PRUEBAS"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="AUTORIZADO POR"	>
				</div>
			</div>
			<div class="row">
				<div class="col m6">
					<input type="text" placeholder="FECHA Y HORA DE APROBACION"	>
				</div>
				<div class="col m6">
					<input type="text" placeholder="REVISION POST-IMPLEMENTACION"	>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

