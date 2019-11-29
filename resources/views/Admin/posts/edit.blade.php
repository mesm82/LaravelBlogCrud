@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
           <div class="card">
                <div class="card-body">
                   Editar Entrada
                   
                   <hr>
             <div class="card-body">
                 {!! Form::model($post, ['route'=>['posts.update',$post->id], 'method'=>'PUT','files'=>true]) !!}

                     @include('admin.posts.partials.form')

                 {!! Form::close() !!}
             </div>
           </div>
       </div>
    </div>
</div>

@endsection