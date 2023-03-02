@extends('template')
@section('content')   
<div class="card">       
  <header class="card-header">           
    <p class="card-header-title">Films</p>       
  </header>       
  <div class="card-content">           
    <div class="content">               
      <table class="table is-hoverable">                   
        <thead>                       
        <tr>                           
          <th>#</th>                           
          <th>Titre</th>                           
          <th></th>                           
          <th></th>                           
          <th></th>                       
        </tr>                   
      </thead>                   
      <tbody>                       
        @foreach($films as $film)                           
        <tr>                               
          <td>{{ $film->id }}</td>                               
          <td><strong>{{ $film->title}}</strong></td>                               
          <td><a class="button is-primary" href="{{ route('films.show', $film->id)}}">Voir</a></td>                               
          <td><a class="button is-warning" href="{{ route('films.edit', $film->id)}}">Modifier</a></td>                               
          <td>                                   
            <form action="{{route('films.destroy', $film->id) }}" method="post">                                       @csrf                                       
              @method('DELETE')                                       
            <button class="button is-danger" type="submit">Supprimer</button>                                   
          </form>                               
          </td>                           
        </tr>                       
        @endforeach                   
      </tbody>               
    </table>           
  </div>       
</div>   
</div>
@endsection