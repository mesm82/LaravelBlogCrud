@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
           <div class="card">
                <div class="card-body">
                   Crear Categoria
                   
             <div class="card-body">
                 {!! Form::open(['route'=>'categories.store']) !!}

                     @include('admin.categories.partials.form')

                 {!! Form::close() !!}
             </div>
           </div>
       </div>
    </div>
</div>

@endsection