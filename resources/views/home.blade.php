@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <a href="{{ route('events.create')}}" class="btn btn-success">
                Adicionar Evento</a>
                <hr>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-hovered">
                        <thead>
                            <th>ID</th>
                            <th>Imagem</th>
                            <th>Titulo</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                            @foreach ($events as $e)
                            <tr>
                            <td>{{ $e->id }}</td>
                            <td><img src="{{ asset('storage/'.$e->image) }}" width="50px"></td>
                            <td>{{ $e->title }}</td>
                            <td>{{ $e->date->format('d/m/Y') }}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-lg btn-default" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                                      <a href="" class="dropdown-item">Ver</a>
                                    <a href="{{ route('events.edit', $e->id) }}" class="dropdown-item">Editar </a>
                                    <form action="{{ route('events.destroy', $e->id) }}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                      <button class="dropdown-item" type="submit">Deletar</button>
                                    </form>
                                    </div>
                                  </div>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
