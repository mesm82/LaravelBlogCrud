@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-2">
      <h1>Lista de Artículos</h1>

      @foreach($posts as $post)
      <div class="card">
        <div class="card-header">
            {{$post->name}}
        </div>
        <div class="card-body">
            @if($post->file)
                <img src="{{ $post->file }}" width="800" height="400" align="center" class="img-responsive"> 
            @endif
            {{ $post->file }}
            <a href="{{route('post',$post->slug)}}" class="pull-right">Leer más</a>
        </div>
      </div>
      <br>
      @endforeach
     
      {{$posts->render()}}

    </div>
</div>
@endsection