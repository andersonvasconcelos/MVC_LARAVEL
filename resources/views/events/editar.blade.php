@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Adicionar Evento
                </div>
                <div class="card-body">
                <form action="{{ route('events.update', $e->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="exampleInputEmail1">Titulo do Evento</label>
                    <input type="text" class="form-control" name="title" value="{{$e->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Data do Evento</label>
                        <input type="date" class="form-control" name="date" value="{{$e->date}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Imagem do Evento</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descrição do Evento</label>
                        <textarea class="form-control" name="description">{{$e->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Atualizar Evento</button>
                  </form>
                </div>
          </div>
        </div>
    </div>

@endsection
