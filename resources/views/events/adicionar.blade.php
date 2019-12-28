@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Adicionar Evento
                </div>
                <div class="card-body">
                <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Titulo do Evento</label>
                      <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Data do Evento</label>
                        <input type="date" class="form-control" name="date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Imagem do Evento</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descrição do Evento</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar Evento</button>
                  </form>
                </div>
          </div>
        </div>
    </div>

@endsection
