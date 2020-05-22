@extends('layouts.app') 
@section('titulo','Inicio')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header row">
                    <div class="col-6 " style="font-size:20px;">Tareas Pendientes</div>
                    <div class="col-6 text-center"><a href="/agregarTarea">Agregar Tarea</a></div>    
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($tareasP as $element)
                        <div clas="row col-12">
                            <!--div class="col-8">{{$element['id']}}</div-->
                            <div class="col-8">{{$element['descripcion']}}</div>
                            <div class="col-4" onclick="actualizar('{!! $element['id'] !!}')" style="cursor:pointer">Concluida</div>
                        </div>
                        <br>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
var rutaApp = '{!! url('/') !!}' + '/';
function actualizar(id){    
    dts = '{"id":"'+id+'"}';
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: 'POST',
        url:rutaApp+'actualizaTarea',
        data:dts,
        contentType:'application/json',
        success:function(result){
            console.log(result);
            location.reload();
        },
        error:function(error){
            console.log(error);
        }
    });
}
</script>
@endsection