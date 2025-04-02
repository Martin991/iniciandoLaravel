@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Crear nuevo Post</h1>
        </div>
        <div class="card-body">
            <form action="{{route('posts.store')}}" method="POST">
                @csrf <!-- Token de seguridad -->
                <div class="form-group mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Título del post">
                </div>
                <div class="form-group mb-3">
                    <label for="content" class="form-label">Contenido</label>
                    <textarea class="form-control" id="content" name="content" rows="3" placeholder="Contenido del post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{route('posts.index')}}" class="btn btn-danger">Regresar</a>
            </form>
        </div>
    </div>
@endsection