@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
           <div class="card">
                <div class="card-body">
                   Crear Etiqueta
                   
        
             <div class="card-body">
                 {!! Form::open(['route'=>'tags.store']) !!}

                     @include('admin.tags.partials.form')

                 {!! Form::close() !!}
             </div>
           </div>
       </div>
    </div>
</div>

@endsection