@extends('layout.app')

@section('content')
    <div class="justify-content-between align-items-center mb-4" style="text-align: center">
        <h1>Posts</h1>
    </div>
    <div class="justify-content-between mb-4" style="text-align: right">
        <a href="{{route('posts.create')}}" class="btn btn-primary">Crear nuevo Post</a>
        <a href="{{route('posts.clean')}}" class="btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-header" style="text-align: center">
        <h3>Env&iacute;os</h3>
    </div>
    <div class="card-body">
        @empty($postsSend)
            <div class="alert alert-warning" style="text-align: center">
                No hay env&iacute;os disponibles.
            </div>
        @else
            @foreach ($postsSend as $post)
                <div class="alert alert-primary" role="alert">
                    <div class="row">
                        <div class="col-6 justify-content-between align-items-center" style="text-align: left">
                            <h4 class="alert-heading"><strong>{{(trim($post["title"]) != ""?$post["title"]:"Nuevo")}}</strong></h4>
                        </div>
                        <div class="col-6 justify-content-between align-items-center" style="text-align: right">
                            <h4 class="alert-heading"><strong>{{$post["timeReg"]}}</strong></h4>
                        </div>
                    </div>
                    <hr>
                    <p class="mb-0">{{$post["content"]}}</p>
                </div>
            @endforeach
        @endempty   
    </div>
@endsection