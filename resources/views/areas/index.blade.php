@extends('layouts.app')

@section('content')
   <div class="container">
        <h1>Listagem de Áreas
            <a href="{{route('areas.create')}}">
               <button class="btn btn-primary">Cadastrar</button>
            </a>
        </h1>

        <table class="table table-responsive">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Descrição</th>
                  <th>Cor</th>
                  <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($areas as $area)
                <tr>
                    <td>{{ $area->description }}</td>    
                    <td>{{ $area->description }}</td>
                    <td>{{ $area->color }}</td>
                    <td>
                       <button class="btn btn-primary">Editar</button>
                       <button class="btn btn-danger" >Excluir</button>
                    </td>
                </tr>    
                @endforeach  
            </tbody>
        </table>
   </div>
@endsection