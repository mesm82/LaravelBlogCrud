@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
           <div class="card">
              <div class="card-body">
                   Ver Etiqueta 
                   <hr>
                <div class="card-body">
                  <p><strong>Nombre </strong>{{ $tag->name }}</p>
                  <p><strong>Slug   </strong>{{ $tag->slug }}</p>
                </div>
               </div>
           </div>
       </div>
    </div>
</div>

@endsection