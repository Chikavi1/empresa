@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m12">
            <div class="card">
                <h1 class="center-align">Problemas</h1>
                <table>
        <thead>
          <tr>
              <th>folio</th>
              <th>descripcion</th>
              <th>usuario</th>
              <th>dia del problema</th>
          </tr>
        </thead>

        <tbody>
            @foreach($incidentes as $incidente)
          <tr>
            <td>{{$incidente->id}}</td>
            <td>{{$incidente->descripcion}}</td>
            <td>{{$incidente->email}}</td>
            <td>{{$incidente->created_at}}</td>
          </tr>
            @endforeach
        </tbody>
      </table>
            
            </div>
        </div>
    </div>
</div>
@endsection
