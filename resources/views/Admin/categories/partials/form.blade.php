<div>
    {{ Form::label('name','Nombre de la etiqueta')}}
    {{ Form::text('name',null,['class'=>'form-control','id'=>'null'])}}
</div>

<div>
    {{ Form::label('slug','URL Amigable')}}
    {{ Form::text('slug',null,['class'=>'form-control','id'=>'slug'])}}
</div>
<div>
    {{ Form::label('body','Descripción')}}
    {{ Form::textarea('body',null,['class'=>'form-control'])}}
</div>
<br>
<div>
    {{ Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}  
</div>

@section('scripts')


<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
$(document).ready(function(){
    $("#name, #slug").stringToSlug({
        callback: function(text){
             $("#slug").val(text);
        }
    });
});
</script>
@endsection