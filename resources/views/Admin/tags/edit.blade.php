@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
           <div class="card">
                <div class="card-body">
                   Editar Etiqueta
                   
                   <hr>
             <div class="card-body">
                 {!! Form::model($tag, ['route'=>['tags.update',$tag->id], 'method'=>'PUT']) !!}

                     @include('admin.tags.partials.form')

                 {!! Form::close() !!}
             </div>
           </div>
       </div>
    </div>
</div>

@endsection