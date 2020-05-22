@extends('layouts.app')
@section('titulo','Registrar Tarea')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar Tarea') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/registrarTarea') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}" required >
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar Tarea') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @if( Session::has('mensaje-confirmar') )
                    <div class="text-center alert fade show " role="alert" style="    width: 300px;height: 185px;background: white;border-radius: 6px 6px 0px 0px;padding:0px;">
                        <div style="width: 100%; height: 25px;background: #0097a9;border-radius: 6px 6px 0px 0px;" ></div>                    
                        <div class="text-center " style="    padding-top: 4%;">
                            <h5 style="color: #0097a9;">{{ Session::get('mensaje-confirmar') }}</h5>
                        </div>
                        <button type="button" class="boton2 " data-dismiss="alert" aria-label="Close"><span aria-hidden="true"> Aceptar</span>             
                      </button>
                        
                    </div>      
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
