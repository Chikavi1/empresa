@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m12">
            <div class="card">
                <h1 class="center-align">Incidentes</h1>
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
            @if($incidente->descripcion == "otro" && $incidente->email == "ss@hotmail.com")
                <h1>se repite</h1>
            @endif
            <td><a href="{{route('rfc',$incidente->id)}}"> {{$incidente->id}}</a></td>
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
